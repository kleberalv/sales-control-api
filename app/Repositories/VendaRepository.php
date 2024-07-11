<?php

namespace App\Repositories;

use App\Models\Venda;

class VendaRepository
{
    public function getAllVendas()
    {
        return Venda::all();
    }

    public function getVendaById($id)
    {
        return Venda::with(['cliente', 'itens.produto'])->findOrFail($id);
    }

    public function createVenda(array $data)
    {
        return Venda::create($data);
    }

    public function updateVenda($id, array $data)
    {
        $venda = $this->getVendaById($id);
        $venda->update($data);
        return $venda;
    }

    public function deleteVenda($id)
    {
        $venda = $this->getVendaById($id);
        $venda->delete();
        return $venda;
    }
}
