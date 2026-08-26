<?php

namespace App\Services;

use App\Models\Lead;
use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Log;

class QuoteRequestService
{
    public function handle(array $data): QuoteRequest
    {
        $lead = Lead::create([
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
            'email' => $data['email'] ?? null,
            'data_evento' => $data['data_evento'] ?? null,
            'event_type_id' => $data['event_type_id'],
            'status' => 'novo',
        ]);

        $quoteRequest = QuoteRequest::create([
            'lead_id' => $lead->id,
            'mensagem' => $data['mensagem'] ?? null,
            'status_validacao' => 'pendente',
        ]);

        $this->notificarAdministrador($lead);

        return $quoteRequest;
    }

    private function notificarAdministrador(Lead $lead): void
    {
        // Notificação por e-mail será implementada na Sprint 3 (Documento 03).
        // Por enquanto, registramos em log para conferência durante o desenvolvimento.
        Log::info("Novo lead recebido: {$lead->nome} ({$lead->telefone})");
    }
}