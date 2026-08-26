<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'data_evento' => ['nullable', 'date', 'after:today'],
            'event_type_id' => ['required', 'exists:event_types,id'],
            'mensagem' => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Informe o seu nome.',
            'telefone.required' => 'Informe um telefone para contato.',
            'email.email' => 'Informe um e-mail válido.',
            'data_evento.after' => 'A data do evento deve ser futura.',
            'event_type_id.required' => 'Selecione o tipo de evento.',
            'event_type_id.exists' => 'O tipo de evento selecionado é inválido.',
        ];
    }
}