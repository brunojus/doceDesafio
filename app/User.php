<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      ' Id','DataAvaliacao','Nome','TimeUp','Diabetes','FaixaEtaria','SenteComMaiorFrequencia','LocalMaisFrequente','OutroLocal','HoraSintoma','AcordouPeloSintoma','OqueAlivia','ComExercicioSenteMelhora',

      // ;Mensuracao;Intensidade;VasosDilatadosDorsais;PeleSecaRachaduraFissura;CorDaPeleNormal;MicoseInterdigital;MicoseUngueal;PelosPresentes;Calosidades;Edema;CalcadosAdequados;PeNeuropaticoTipico;ArcoDesabado;Valgismo;DedosEmGarra;SinalDaPrece;MonofilamentoAlterado;SensibilidadeVibratoria;SensibilidadeDolorosa;SensibilidadeAoFrio;ReflexosAquileus;PSP;PDPAP;PDPATP;PEPAP;PEPATP;Amputacao;SimAmputacao;UlceraPrevia;UlceraAtiva;SimUlceraAtiva;ClassificacaoRiscoSeguimento;PercepcaoPressaoMonofilamento;TFMPD;TFMPE;TFMTAD;TFMTAE;FlexibilidadeDireitoDorsiflexao;FlexibilidadeDireitoPlantiflexao;FlexibilidadeEsquerdoDorsiflexao;FlexibilidadeEsquerdoPlantiflexao;FrequenciaAutoExame;RecebeuOrientacao;SeSimOnde
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
