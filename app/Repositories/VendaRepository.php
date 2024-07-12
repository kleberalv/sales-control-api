<?php

namespace App\Repositories;

use App\Models\Venda;

class VendaRepository
{
    public function getAllVendas()
    {
        return Venda::all();
    }

    public function getVendasByDiretoria($diretoriaId)
    {
        return Venda::whereHas('user.unidade', function ($query) use ($diretoriaId) {
            $query->where('diretoria_id', $diretoriaId);
        })->get();
    }

    public function getVendasByUnidade($unidadeId)
    {
        return Venda::whereHas('user', function ($query) use ($unidadeId) {
            $query->where('unidade_id', $unidadeId);
        })->get();
    }

    public function getVendasByUser($userId)
    {
        return Venda::where('user_id', $userId)->get();
    }

    public function createVenda($data)
    {
        return Venda::create($data);
    }

    public function updateVenda($id, $data)
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

    public function getVendaById($id)
    {
        return Venda::findOrFail($id);
    }
}
