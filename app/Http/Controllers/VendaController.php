<?php

namespace App\Http\Controllers;

use App\Services\VendaService;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Helpers\RequestHelper;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{
    protected $vendaService;

    public function __construct(VendaService $vendaService)
    {
        $this->vendaService = $vendaService;
    }

    public function index(Request $request)
    {
        $vendas = $this->vendaService->getVendasByUserProfile(Auth::user());
        if (RequestHelper::isApiRequest($request)) {
            return ResponseHelper::respondWithApi(null, $vendas, Response::HTTP_OK);
        }
        return view('vendas.index', compact('vendas'));
    }

    public function store(Request $request)
    {
        $validation = $this->vendaService->validateVendaInput($request->all());
        if ($validation) {
            return ResponseHelper::respondWithApi($validation['message'], $validation['errors'], $validation['status']);
        }

        $this->vendaService->createVenda($request->all(), Auth::user());
        $message = 'Venda criada com sucesso!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, null, Response::HTTP_CREATED) :
            ResponseHelper::respondWithWeb('vendas.index', $message);
    }

    public function show(Request $request, $id)
    {
        $venda = $this->vendaService->getVendaById($id);
        if (RequestHelper::isApiRequest($request)) {
            return ResponseHelper::respondWithApi(null, $venda, Response::HTTP_OK);
        }
        return view('vendas.show', compact('venda'));
    }

    public function update(Request $request, $id)
    {
        $authorization = $this->vendaService->authorizeUser();
        if ($authorization) {
            return ResponseHelper::respondWithApi($authorization['message'], null, $authorization['status']);
        }

        $validation = $this->vendaService->validateVendaInput($request->all(), true);
        if ($validation) {
            return ResponseHelper::respondWithApi($validation['message'], $validation['errors'], $validation['status']);
        }

        $this->vendaService->updateVenda($id, $request->all());
        $message = 'Venda atualizada com sucesso!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, null, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('vendas.index', $message);
    }

    public function destroy(Request $request, $id)
    {
        $authorization = $this->vendaService->authorizeUser();
        if ($authorization) {
            return ResponseHelper::respondWithApi($authorization['message'], null, $authorization['status']);
        }

        $this->vendaService->deleteVenda($id);
        $message = 'Venda excluida com sucesso!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, null, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('vendas.index', $message);
    }
}
