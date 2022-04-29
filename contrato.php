<?php 
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class Contracto  {
    public $razaoSocial;
    public $cnpjEmpresa;
    public $nomeRepresentanteEmpresa; 
    public  $nomeOrientador;
    }
class TermoCompromisso extends Contracto  {
    public $nomeEstagiario;
    public $rgEstagiario;
    public $enderecoEstagiario;
    public $horarioSemanal;
    public $totalHorasSemanais;
    public $dataInicio;
    public $dataFim;
    public $apoliceSeguro;
    public $nomeSeguradora;
    public $atividadesEstagio;
    public $dataInicioContrato;

    public function gerarPDF($fileName) {
        $html_contract = "<!DOCTYPE html>
        <html lang='pt-br'>
        
        <head>
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Tapestry&display=swap');
                body {
                    margin: 40px;
                    font-family: 'Outfit', sans-serif; 
                }

                p {
                    text-align: justify;
                }

                .pDireita {
                    text-align: right;
                }

                .linha {
                    width: 190px;
                    border-bottom: 2px solid rgb(2, 2, 2);
                }

                .PStyle {
                    text-align: center;
                }

                .img {
                    position: relative;
                    left: 40px;
                }

                table {
                    margin: auto;
                }

                .DivOrganizes2 {
                    padding: 0px 20px;
                }
            </style>
        </head>
        
        <body>
            <center>Termo de Compromisso para a Realização de Estágio Supervisionado</center>
            <center>(Lei nº 11.778/08)</center>
            <center>
                <h3>TERMO DE COMPROMISSO</h3>
            </center>
        
            <p>&emsp;&emsp;&emsp;Pelo presente instrumento, as partes a seguir nomeadas e ao final assinadas, de um lado $this->razaoSocial
                inscrita no CNPJ sob o nº $this->cnpjEmpresa, doravante denominada <b>CONCEDENTE</b> e, de outro
                lado, o(a) estudante  $this->nomeEstagiario,  $this->rgEstagiario, residente à $this->enderecoEstagiario, doravante
                denominado <b>ESTAGIÁRIO(A)</b>, aluno(a) regularmente matriculado(a) no Curso Superior de Tecnologia em Análise
                e Desenvolvimento de Sistemas da Faculdade de Tecnologia de Presidente Prudente – Fatec 157, localizada na
                cidade de Presidente Prudente, Estado de São Paulo, doravante denominada <b>INSTITUIÇÃO DE ENSINO</b>, na
                condição de interveniente, acordam e estabelecem entre si as cláusulas e condições que regerão este TERMO DE
                COMPROMISSO.</p>

            <p><b>CLÁUSULA PRIMEIRA</b><br>
                Este Termo de Compromisso está fundamentado e fica vinculado ao Convênio – instrumento jurídico de que trata a
                Lei 11.788/08 de 25/09/2008, celebrado entre a Concedente e a Instituição de Ensino da qual o Estagiário(a) é
                aluno(a).
                <br><b>CLÁUSULA SEGUNDA</b><br>
                As atividades a serem desenvolvidas durante o Estágio, objeto do presente Termo de Compromisso, constarão de
                Plano de Estágio construído pelo(a) Estagiário(a) em conjunto com a Concedente e orientado por professor da
                Instituição de Ensino.
                <br><b>CLÁUSULA TERCEIRA</b><br>
                Fica compromissado entre as partes que:<br>
                I - As atividades do Estágio a serem cumpridas: $this->horarioSemanal horas, num total de $this->totalHorasSemanais horas semanais;<br>
                II - A jornada de atividade do(a) Estagiário(a) deverá compatibilizar-se com o horário escolar do(a)
                Estagiário(a) e com o horário da Concedente;<br>
                III- Nos períodos de férias escolares, a jornada de estágio será estabelecida de comum acordo entre a
                Estagiário(a) e a Concedente, com o conhecimento da Instituição de Ensino;<br>
                IV- Este Termo de Compromisso terá vigência de data de $this->dataInicio a $this->dataFim, podendo ser denunciado
                a qualquer tempo, por qualquer das três partes envolvidas, unilateralmente, mediante comunicação escrita, com
                antecedência mínima de 5 (cinco) dias.
                <br><b>CLÁUSULA QUARTA</b><br>
                No desenvolvimento do estágio ora compromissado, caberá à CONCEDENTE:<br>
                I - Apresentar um Plano de Estágio à Instituição de Ensino;<br>
                II - Proporcionar ao Estagiário atividades de aprendizagem social, profissional e cultural compatíveis com sua
                formação profissional;<br>
                III - Proporcionar ao Estagiário condições de treinamento prático e de relacionamento humano;<br>
                IV - Designar um(a) Supervisor(a) ou responsável para orientar as tarefas do Estagiário;<br>
                V - Proporcionar à Instituição de Ensino, sempre que necessário, subsídios que possibilitem o acompanhamento, a
                supervisão e a avaliação parcial do Estagiário;<br>
                VI - Fornecer relatório à Instituição de Ensino, ao final do estágio, sobre a atuação do Estagiário;<br>
                VII- Estabelecer valor a ser pago como Bolsa-Estágio.
                <br><b>CLÁUSULA QUINTA</b><br>
                No desenvolvimento do estágio ora compromissado, caberá ao ESTAGIÁRIO:<br>
                I - Estar regularmente matriculado e frequente na Instituição de Ensino, em semestre compatível com a prática
                exigida no Estágio;<br>
                II - Construir, com a Concedente e o Supervisor de Estágios da FATEC de Presidente Prudente, um Plano de
                Estágio, conforme critérios da Coordenação de Cursos da FATEC;<br>
                III - Observar as diretrizes e/ou normas internas da Concedente e os dispositivos legais aplicáveis ao estágio,
                bem como as orientações do Coordenador de Estágios e do seu Supervisor ou responsável;<br>
                IV - Cumprir, com seriedade e responsabilidade, empenho e interesse a programação estabelecida entre a
                Concedente, o Estagiário e a Instituição de Ensino e preservar o sigilo das informações a que tiver acesso;<br>
                V - Elaborar e entregar à Instituição de Ensino de relatórios parciais e relatório final sobre seu estágio, na
                forma estabelecida por ele;<br>
                VI - Cumprir as normas internas da Concedente, principalmente as relacionadas com o estágio e não divulgar ou
                transmitir, durante ou depois do período de estágio, a quem quer que seja, qualquer informação confidencial ou
                material que se relacione com os negócios da Concedente;<br>
                VII - Responder pelas perdas e danos consequentes da inobservância das cláusulas constantes do presente
                termo;<br>
                VIII - Comunicar à Concedente, no prazo de 5 (cinco) dias, a ocorrência de qualquer uma das alternativas do
                inciso I da Cláusula Oitava.
                IX - Respeitar as cláusulas do Termo de Compromisso.<br>
                X - Encaminhar obrigatoriamente à Instituição de Ensino e à Concedente uma via do presente instrumento,
                devidamente assinado pelas partes;
                <br><b>CLÁUSULA SEXTA</b><br>
                Caberá à INSTITUIÇÃO DE ENSINO:<br>
                I - Estabelecer critérios para a realização do Estágio Supervisionado, seu acompanhamento e avaliação e
                encaminhá-los à Concedente;<br>
                II - Planejar o estágio, orientar, supervisionar e avaliar o Estagiário, parcialmente e ao final do estágio.
                <br><b>CLÁUSULA SÉTIMA</b><br>
                A Concedente se obriga a fazer o Seguro de Acidentes Pessoais ocorridos nos locais de estágio, conforme
                legislação vigente, de acordo com a Apólice de Seguro nº $this->apoliceSeguro da Seguradora $this->nomeSeguradora,
                nos termos do Artigo 9º Inciso IV da Lei 11.788/08.
                <br><b>CLÁUSULA OITAVA</b><br>
                Constituem motivo para a rescisão automática do presente Termo de Compromisso:<br>
                I - A conclusão, abandono ou mudança de Curso, ou trancamento de matrícula do Estagiário;<br>
                II - O não cumprimento do convencionado neste Termo de Compromisso, bem como no Convênio do qual decorre;<br>
                III- O abandono do estágio.
                <br><b>CLÁUSULA NONA</b><br>
                É assegurado o Estagiário, sempre que o estágio tenha duração igual ou superior a um ano, período de recesso de
                trinta dias, a ser gozado preferencialmente durante suas férias escolares. E proporcional aos estágios
                inferiores a um ano. O recesso de que trata esse artigo deverá ser remunerado quando o Estagiário receber bolsa
                ou outra forma de contraprestação e o auxílio transportes, conforme artigo 13º, § 1º e § 2º da Lei 11.788.
                <br><b>CLÁUSULA DÉCIMA</b><br>
                Assim, materializado e caracterizado, o presente Estágio, segundo a legislação, não acarretará vínculo
                empregatício de qualquer natureza entre o Estagiário e a Concedente, nos termos do que dispõem o Artigo 12º da
                Lei nº 11.788/08.
                Por estarem de inteiro e comum acordo com as condições e dizeres deste instrumento, as partes assinam-no em 3
                (três) vias de igual teor e forma, cabendo a primeira à Concedente, a segunda ao Estagiário e a terceira à
                Instituição de Ensino.
            </p>

            <center>
                <h3>PLANO DE ATIVIDADES</h3>
            </center>

            <p>O plano de atividades de estágio a seguir será acompanhado por $this->nomeRepresentanteEmpresa na CONCEDENTE e por
                $this->nomeOrientador na IES.<br>
                Atividades: $this->atividadesEstagio.</p>
            <p class='pDireita'>Presidente Prudente - SP, $this->dataInicioContrato</p>


            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class='img'>
                            <img src='https://thumbs2.imgbox.com/7a/e2/QLnCiC8f_t.png' height='120px'>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class='linha'></div>
                    </td>
                    <td></td>
                    <td>
                        <div class='linha'></div>
                    </td>
                    <td></td>
                    <td>
                        <div class='linha'></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class='PStyle'>$this->nomeEstagiario</p>
                    </td>
                    <td class='DivOrganizes2'></td>
                    <td>
                        <p class='PStyle'>$this->nomeRepresentanteEmpresa<br>
                            RESPONSÁVEL LEGAL EMPRESA
                        </p>
                    </td>
                    <td class='DivOrganizes2'></td>
                    <td>
                        <p class='PStyle'><b>Renilda Terezinha Monteiro</b><br>
                            Diretor da Fatec de Presidente Prudente
                        </p>
                    </td>
                </tr>
            </table>
        </body>
        
        </html>";
            $options = new Options();
            $options->set('isRemoteEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html_contract);
            $dompdf->loadHtml($html_contract);
            $dompdf->render();
            $dompdf->setPaper("A4");
            $dompdf->stream($fileName,["Attachment" => false]);
        }
    }
class TermoConvenio extends Contracto {
    public $enderecoEmpresa;
    public $data;
    public $rgOrientadorEstagio;
    public $nomeCordenadorCurso;
    public $rgCordenadorCurso;  

    public function gerarPDF($fileName) {
        $html_contract = "<!DOCTYPE html>
        <html lang='pt-br'>
        
        <head>
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Tapestry&display=swap');
                body {
                    margin: 40px;
                    line-height: 1.90;
                    font-family:  'Outfit', sans-serif; ;
                }

                h4 {
                    margin: 0;
                }
        
                p {
                    text-align: justify;
                    margin: 0;
                }
        
                .leftParagraph {
                    padding-left: 30%;
                }
        
                .pTab {
                    padding-left: 5%;
        
                }
        
                .pDireita {
                    text-align: right;
                }
        
                .linha {
                    width: 280px;
                    border-bottom: 2px dotted rgb(2, 2, 2);
                }
        
                .PStyle {
                    text-align: center;
                }
        
                table {
                    margin: auto;
                }
        
                .DivOrganizes1 {
                    margin-top: -80px;
                }
        
                .DivOrganizes2 {
                    padding: 0px 20px;
                }
        
                .DivOrganizes3 {
                    padding-bottom: 100px;
                }
            </style>
        </head>
        
        <body>
        
            <center>
                <h2>CONVÊNIO DE CONCESSÃO DE ESTÁGIO</h2>
            </center>
        
            <p class='leftParagraph'>
                CONVÊNIO DE CONCESSÃO DE ESTÁGIO PROFISSIONALIZANTE QUE ENTRE SI CELEBRAM $this->razaoSocial E O CENTRO
                ESTADUAL DE EDUCAÇÃO TECNOLÓGICA PAULA SOUZA, POR INTERMÉDIO DA FACULDADE DE TECNOLOGIA DE PRESIDENTE PRUDENTE –
                FATEC 157.
            </p>
            <p>
                Pelo presente instrumento, a $this->razaoSocial, com sede à $this->enderecoEmpresa, inscrita no CNPJ/MF
                sob o n.º $this->cnpjEmpresa, neste ato representada por $this->nomeRepresentanteEmpresa doravante designada
                <b>“Concedente de Estágio”</b> e o <b>Centro Estadual de Educação Tecnológica Paula Souza</b>, autarquia
                estadual de regime especial, nos termos do artigo 15, da Lei n.º 952, de 30 de janeiro de 1976, associado e
                vinculado à Universidade Estadual Paulista “Júlio de Mesquita Filho”, criado pelo Decreto-Lei de 06 de outubro
                de 1969, com sede na Praça Cel. Fernando Prestes, 74 - São Paulo, Capital, inscrita no CNPJ/MF sob o n.º
                62.823.257/0001-09, doravante denominado <b>CEETEPS</b>, neste ato representado por <b>Renilda Terezinha
                    Monteiro, RG 30.971.809, Diretor da Faculdade de Tecnologia de Presidente Prudente – Fatec 157</b>, com sede
                no município de Presidente Prudente – São Paulo, devidamente autorizado conforme Portaria CEETEPS nº. 45 de
                03/02/2009 em consonância com o disposto na Lei Federal n° 11.788, de 25/09/2008, resolvem celebrar concessão de
                estágio de complementação educacional, na forma das seguintes cláusulas e condições:
            </p>
            <br>
            <h4>CLÁUSULA PRIMEIRA – DO OBJETO DO CONVÊNIO</h4>
            <p class='pTab'>
                O presente convênio objetiva estabelecer as condições indispensáveis à viabilização de concessão de estágio de
                complementação educacional junto à Concedente de Estágio aos estudantes matriculados nas Faculdades de
                Tecnologia e nas Escolas Técnicas do CEETEPS, entendido o estágio como uma atividade de prática profissional que
                integra o processo de ensino-aprendizagem, configurando uma metodologia que contextualiza e põe em ação o
                aprendizado.
            </p>
            <br>
            <h4>CLÁUSULA SEGUNDA - DO TERMO DE COMPROMISSO</h4>
            <p class='pTab'>
                A realização dos estágios dependerá de prévia formalização, em cada caso, do competente TERMO DE COMPROMISSO DE
                ESTÁGIO, celebrado entre a Concedente de Estágio e o estudante, com interveniência da Instituição de Ensino.
            </p>
            <br>
            <h4>CLÁUSULA TERCEIRA - DO PLANO DE ESTÁGIO</h4>
            <p class='pTab'>
                A Concedente de Estágio para bem atender à finalidade do presente convênio, obriga-se a propiciar ao
                estudante-estagiário todas as condições e facilidades para um adequado aproveitamento do estágio, cumprindo e
                fazendo cumprir o Plano de Realização Estágio previamente acordado pelas partes, bem como designando supervisor
                para acompanhar e auxiliar os estudantes-estagiários.
            </p>
            <br>
            <h4>CLÁUSULA QUARTA – DA CONCESSÃO DE ESTÁGIO</h4>
            <p class='pTab'>
                A concessão de bolsa de complementação educacional e/ou outra contraprestação por parte da Concedente de Estágio
                aos estudantes incorporados em seu Programa de Estágio, bem como a do auxílio-transporte, deverá atender ao
                disposto no artigo 12 da Lei Federal nº 11.788, de 25/09/2008.<br>
                <b>Parágrafo Único –</b> A concessão de estágio não gera qualquer vínculo empregatício, desde que sejam
                observados os requisitos constantes nos incisos I, II e III do artigo 3º da Lei Federal nº 11.788, de
                25/09/2008.
        
            </p>
            <br>
            <h4>CLÁUSULA QUINTA – DA CARGA-HORÁRIA E DURAÇÃO</h4>
            <p class='pTab'>
                A jornada de atividades e a carga horária do estágio obedecerão ao disposto nos incisos I e II e parágrafos 1º e
                2º do artigo 10 e 11 da Lei Federal nº 11.788, de 25/09/2008.
            </p>
            <br>
            <h4>CLÁUSULA SEXTA – DAS OBRIGAÇÕES ESPECIAIS</h4>
            <p class='pTab'>
                Além das obrigações assumidas nas demais cláusulas deste Convênio, os partícipes obrigam-se, especialmente, ao
                seguinte:<br>
            </p>
            <div class='pTab'>
                <dl>
                    <dt>I – Obrigações da Concedente de Estágio:</dt>
                    <dd>a) celebrar termo de compromisso com a instituição de ensino e o educando, zelando por seu cumprimento;
                    </dd>
                    <dd>b) indicar um funcionário de seu quadro de pessoal, com formação ou experiência profissional na área de
                        conhecimento desenvolvida no curso do estagiário, para orientar e supervisionar até 10 (dez) estagiários
                        simultaneamente;</dd>
                    <dd>c) contratar em favor do estagiário seguro contra acidentes pessoais, cuja apólice seja compatível com
                        valores de mercado, conforme fique estabelecido no Termo de Compromisso;</dd>
                    <dd> d) entregar termo de realização do estágio com indicação resumida das atividades desenvolvidas, dos
                        períodos e da avaliação de desempenho, por ocasião do desligamento do estagiário;</dd>
                    <dd>e) enviar à instituição de ensino, com periodicidade mínima de 6 (seis) meses, relatório de atividades,
                        com vista obrigatória do estagiário;</dd>
                    <dd>f) garantir ao estagiário o cumprimento das exigências escolares, inclusive no que se refere ao horário
                        escolar;</dd>
                    <dd>g) coadjuvar o CEETEPS, na avaliação final do estudante-estagiário, referente às atividades executadas
                        no decorrer do estágio;</dd>
                    <dd>h) Informar o CEETEPS, nas épocas oportunas, a disponibilidade de vagas referentes à sua programação de
                        estágio de complementação educacional.</dd>
                    <dt>II - Obrigações do CEETEPS: </dt>
                    <dd>a) celebrar Termo de Compromisso com a Concedente de Estágio e o educando indicando as condições de
                        adequação do estágio à proposta pedagógica do curso;
                    </dd>
                    <dd>b) elaborar, em consonância com suas diretrizes internas e as peculiaridades das atividades
                        desenvolvidas pela Concedente de Estágio, a programação técnica do estágio, inclusive definindo
                        previamente os critérios de avaliação do seu desenvolvimento;</dd>
                    <dd>c) comunicar imediatamente à Concedente de Estágio, por escrito, todos os casos de desligamento de
                        estudante-estagiário, em relação ao(s) referido(s) na Cláusula Primeira, seja qual for o motivo,
                        inclusive conclusão de curso;</dd>
                    <dd>d) indicar professor orientador, da área a ser desenvolvida no estágio, como responsável pelo
                        acompanhamento e avaliação das atividades do estagiário; </dd>
                    <dd>e) comunicar à Concedente de Estágio, no início do período letivo, as datas de realização de avaliações
                        escolares ou acadêmicas.</dd>
                </dl>
            </div>
            <br>
            <h4>CLÁUSULA SÉTIMA – DA VIGÊNCIA</h4>
            <p class='pTab'>
                O presente convênio terá vigência pelo prazo de 48 (quarenta e oito) meses, a contar da data de sua assinatura,
                podendo ser prorrogado mediante celebração de Termo Aditivo, atendendo o limite máximo de 60 (sessenta) meses.
            </p>
            <br>
            <h4>CLÁUSULA OITAVA – DA DENÚNCIA E RESCISÃO</h4>
            <p class='pTab'>
                Este convênio poderá, a qualquer tempo, ser denunciado mediante notificação prévia de 60 (sessenta) dias,
                ressalvada a faculdade de rescisão, desde que comprovado o não cumprimento de qualquer de suas cláusulas.<br>
                <b>Parágrafo Único –</b> A extinção do presente Convênio, antes do seu final, fixado na Cláusula Oitava,
                decorrente de denúncia por qualquer das partes, não prejudicará os estagiários incorporados.
            </p>
            <br>
            <h4>CLÁUSULA NONA - DO FORO</h4>
            <p class='pTab'>
                Para solução de quaisquer controvérsias, oriundas da execução deste Convênio, as partes elegem uma das Varas do
                Foro da Capital do Estado de São Paulo, com renúncia expressa a qualquer outro, por mais privilegiado que seja.
            </p>
            <p>Estando assim justas e acordes, firmam o presente em 02 (duas) vias de igual teor e forma, para um só efeito, na
                presença das testemunhas instrumentais abaixo nomeadas e subscritas.</p><br>
        
            <p class='pDireita'>Presidente Prudente - SP, $this->data</p>
            <br>
            <br>
            <table>
                <tr>
                    <td>
                        <div class='linha'></div>
                    </td>
                    <td></td>
                    <td>
                        <div class='linha'></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class='PStyle'>Renilda Terezinha Monteiro<br>
                            Diretora da Fatec de Presidente Prudente<br>
                            Representante do Centro Estadual de<br> Educação Tecnológica Paula Souza – <br>CEETEPS
                        </p>
                    </td>
                    <td></td>
                    <td>
                        <div class='DivOrganizes1'>
                            <p class='PStyle'>$this->nomeRepresentanteEmpresa<br>
                                (carimbo e assinatura)
                            </p>
                        </div>
        
                    </td>
                </tr>
                <tr>
                    <td class='DivOrganizes3'>
                        <p>Testemunhas:</p>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1.<div class='linha'></div>
                    </td>
                    <td class='DivOrganizes2'></td>
                    <td>2.<div class='linha'></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class='PStyle'>$this->nomeOrientador</p>
                        <P class='PStyle'>$this->rgOrientadorEstagio</P>
                    </td>
                    <td></td>
                    <td>
                        <p class='PStyle'>$this->nomeCordenadorCurso</p>
                        <p class='PStyle'>$this->rgCordenadorCurso</p>
                    </td>
                </tr>
            </table>
            <br>
            <br>
        </body>
        
        </html>";
            $options = new Options();
            $options->set('isRemoteEnabled', true);
            
            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html_contract);
            $dompdf->render();
            $dompdf->setPaper("A4");
            $dompdf->stream($fileName,["Attachment" => false]);
        }
    }
?>