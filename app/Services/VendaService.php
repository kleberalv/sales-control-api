<?php

namespace App\Services;

use App\Repositories\VendaRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class VendaService
{
    protected $vendaRepository;

    public function __construct(VendaRepository $vendaRepository)
    {
        $this->vendaRepository = $vendaRepository;
    }

    public function getVendasByUserProfile($user)
    {
        switch ($user->perfil->nome) {
            case 'Diretor Geral':
                return $this->vendaRepository->getAllVendas();
            case 'Diretor':
                return $this->vendaRepository->getVendasByDiretoria($user->unidade->diretoria_id);
            case 'Gerente':
                return $this->vendaRepository->getVendasByUnidade($user->unidade_id);
            case 'Vendedor':
                return $this->vendaRepository->getVendasByUser($user->id);
            default:
                return [];
        }
    }

    public function validateVendaInput($data, $isUpdate = false)
    {
        $rules = [
            'data' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'valor' => 'required|numeric',
            'lat_lon' => 'nullable|string',
        ];

        if ($isUpdate) {
            $rules['user_id'] = 'required|exists:users,id';
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return [
                'message' => 'Validation error',
                'errors' => $validator->errors(),
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            ];
        }

        return null;
    }

    public function createVenda($data, $user)
    {
        $data['user_id'] = $user->id;
        return $this->vendaRepository->createVenda($data);
    }

    public function updateVenda($id, $data)
    {
        return $this->vendaRepository->updateVenda($id, $data);
    }

    public function deleteVenda($id)
    {
        return $this->vendaRepository->deleteVenda($id);
    }

    public function getVendaById($id)
    {
        return $this->vendaRepository->getVendaById($id);
    }

    public function authorizeUser()
    {
        $user = Auth::user();
        if ($user->perfil->nome === 'Vendedor') {
            return [
                'message' => 'Você não possui permissão para realizar esta ação',
                'status' => Response::HTTP_UNAUTHORIZED,
            ];
        }

        return null;
    }
}
