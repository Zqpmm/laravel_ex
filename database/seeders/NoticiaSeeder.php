<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;


class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Event::create([
            'titulo' => 'Consulta do Banco Central de valores a receber esquecidos em bancos: veja calendário de liberação',  
            'subtitulo' => 'Serviço foi retomado depois que grande volume de acessos derrubou primeira versão do site.',
            'categoria' => 'Economia',
            'img' => 'https://istoe.com.br/wp-content/uploads/sites/14/2021/02/dinheiro-100-50-418x235.jpg',
            'conteudo-header' => 'Está liberada novamente a consulta a dinheiro "esquecido" pelos brasileiros nos bancos, depois da interrupção do serviço em janeiro, quando o volume de acessos derrubou o site do Banco Central.
            O serviço foi restabelecido em uma página específica. Mas, no primeiro acesso, o cliente pode consultar apenas se há ou não recursos disponíveis. Por ora, basta informar o CPF ou CNPJ (veja abaixo como fazer consulta).',
            'conteudo-footer' => 'Ao fazer esta primeira consulta, o cliente do banco recebe uma data e período para consultar e solicitar o resgate do saldo existente. As datas são agendadas de acordo com o ano de nascimento da pessoa ou da criação da empresa, conforme calendário abaixo. Entenda abaixo como fazer a consulta.',
            'autor' => 'Felipe Andrey'   
        ]); 

        Event::create([
            'titulo' => 'Grêmio demite o técnico Vagner Mancini',  
            'subtitulo' => 'Treinador deixa o clube clube exatamente 14 anos depois de sua primeira passagem e sai novamente invicto na temporada',
            'categoria' => 'Esporte',
            'img' => 'https://s2.glbimg.com/WcPagEopieE0rFtoDlm_IbaUtR8=/0x0:2480x1653/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2022/n/Y/H61aLCRWevm2ujoObMxA/51879356987-4577e5a2e7-o.jpg',
            'conteudo-header' => 'Vagner Mancini não é mais o técnico do Grêmio. O treinador não resistiu às vaias da torcida após o empate contra o Juventude e as atuações ruins do time no Campeonato Gaúcho e foi demitido no início da tarde desta segunda-feira. O anúncio foi feito pelo vice-presidente de futebol, Dênis Abrahão, em entrevista à Rádio Gaúcha.

            O treinador foi comunicado pelo dirigente durante encontro pela manhã, no CT Luiz Carvalho. O presidente Romildo Bolzan Jr. esteve mais cedo no CT, mas não participou da reunião. Segundo o vice de futebol, a decisão pela saída do treinador foi tomada em função do "ambiente externo".',
            'conteudo-footer' => 'dasdsadas6',
            'autor' => 'Em sua segunda passagem pelo Grêmio, Mancini comandou o time em 18 partidas, com nove vitórias, três empates, seis derrotas e aproveitamento de 55,55%.

            O treinador foi contratado em outubro passado para substituir Luiz Felipe Scolari, com a missão de salvar o time do rebaixamento no Campeonato Brasileiro, e foi mantido no cargo para a temporada 2022 mesmo com a queda confirmada.',   
            'autor' => 'Sandro Silva'   
        ]);

        Event::create([
            'titulo' => 'Média móvel de mortes por Covid no Brasil a maior em 6 meses e se aproxima de 900 por dia',  
            'subtitulo' => 'País tem 638.124 óbitos e 27.424.975 casos registrados do novo coronavírus, segundo dados reunidos pelo consórcio de veículos de imprensa. Média da última semana chegou a 894 vítimas diárias.',
            'categoria' => 'Saúde',
            'img' => 'http://c.files.bbci.co.uk/D505/production/_115033545_gettyimages-1226314512.jpg',
            'conteudo-header' => 'Vale ressaltar que há estados em que o baixo número médio de óbitos pode levar a grandes variações percentuais. Os números de médias móveis são, em geral, em números decimais e arredondados para facilitar a apresentação dos dados. Já a variação percentual para calcular a tendência (alta, estabilidade ou queda) leva em conta os números não arredondados.',
            'conteudo-footer' => 'O g1 exibe abaixo os gráficos de alguns estados na evolução de mortes por Covid e casos conhecidos da doençaa. Para ver a situação em todos os estados e no DF, além dos números nacionais, visite a página especial com mais detalhes e análises.',
            'autor' => 'Augusto Alves'   
        ]);

    }
}
