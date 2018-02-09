<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_LEGAL = 'legal';

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'client_type'
    ];

    //verifica qual o formulário de crate é mostrado, pessoa fisica ou pessoa juridica
    public static function getClientType($type){
        return $type == Client::TYPE_LEGAL ? $type: Client::TYPE_INDIVIDUAL;
    }
}
