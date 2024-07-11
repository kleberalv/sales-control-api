<?php

namespace App\Http\Controllers;

use App\Services\VendaService;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Helpers\RequestHelper;
use Illuminate\Http\Response;

class VendaController extends Controller
{
    protected $vendaService;

    public function __construct(VendaService $vendaService)
    {
        $this->vendaService = $vendaService;
    }

    public function index(Request $request)
    {
        $vendas = $this->vendaService->getAllVendas();
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

        $venda = $this->vendaService->createVenda($request->all());
        $message = 'Venda created successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, $venda, Response::HTTP_CREATED) :
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
        $validation = $this->vendaService->validateVendaInput($request->all());
        if ($validation) {
            return ResponseHelper::respondWithApi($validation['message'], $validation['errors'], $validation['status']);
        }

        $venda = $this->vendaService->updateVenda($id, $request->all());
        $message = 'Venda updated successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, $venda, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('vendas.index', $message);
    }

    public function destroy(Request $request, $id)
    {
        $this->vendaService->deleteVenda($id);
        $message = 'Venda deleted successfully!';

        return RequestHelper::isApiRequest($request) ?
            ResponseHelper::respondWithApi($message, null, Response::HTTP_OK) :
            ResponseHelper::respondWithWeb('vendas.index', $message);
    }
}
