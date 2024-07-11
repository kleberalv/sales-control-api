<?php

namespace App\Services;

use App\Repositories\VendaRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class VendaService
{
    protected $vendaRepository;

    public function __construct(VendaRepository $vendaRepository)
    {
        $this->vendaRepository = $vendaRepository;
    }

    public function validateVendaInput($data)
    {
        $rules = [
            'cliente_id' => 'required|exists:clientes,id',
            'data_venda' => 'required|date',
            'itens' => 'required|array|min:1',
            'itens.*.produto_id' => 'required|exists:produtos,id',
            'itens.*.quantidade' => 'required|integer|min:1',
        ];

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

    public function createVenda($data)
    {
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

    public function getAllVendas()
    {
        return $this->vendaRepository->getAllVendas();
    }

    public function getVendaById($id)
    {
        return $this->vendaRepository->getVendaById($id);
    }
}
