<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\DataViewer;

class Customer extends Model
{
    use DataViewer;

    public static $columns = [
      
			  'id','DataAvaliacao','Nome','TimeUp','Diabetes',
    	      'FaixaEtaria','SenteComMaiorFrequencia','LocalMaisFrequente',
    	      'OutroLocal','HoraSintoma','AcordouPeloSintoma','OqueAlivia','ComExercicioSenteMelhora','Mensuracao','Intensidade','VasosDilatadosDorsais','PeleSecaRachaduraFissura','CorDaPeleNormal','MicoseInterdigital','MicoseUngueal','PelosPresentes','Calosidades','Edema','CalcadosAdequados','PeNeuropaticoTipico','ArcoDesabado','Valgismo','DedosEmGarra','SinalDaPrece','MonofilamentoAlterado','SensibilidadeVibratoria','SensibilidadeDolorosa','SensibilidadeAoFrio','ReflexosAquileus','PSP','PDPAP','PDPATP','PEPAP','PEPATP','Amputacao','SimAmputacao','UlceraPrevia','UlceraAtiva','SimUlceraAtiva','ClassificacaoRiscoSeguimento','PercepcaoPressaoMonofilamento','TFMPD','TFMPE','TFMTAD','TFMTAE','FlexibilidadeDireitoDorsiflexao','FlexibilidadeDireitoPlantiflexao','FlexibilidadeEsquerdoDorsiflexao','FlexibilidadeEsquerdoPlantiflexao','FrequenciaAutoExame','RecebeuOrientacao','SeSimOnde'
    ];
}
