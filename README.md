 # Gerador de PDF
módulo que gera PDFs de termo de compromisso e convênio  relacionados com a dicsiplina de estágio na fatec de presidente prudente , desenvolvido em PHP
Nós pedimos para que o Docente Dione Ferrari, da Fatec de presidente prudente nos passasse um projeto então ele nos passou este tarefa, que será integrado no sistema real da FATEC

<h3>LINGUAGENS UTILIZADAS</h3>
<p>Foram usadas na construção do projeto:</p>
<ul>
	<li><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="20" height="20"/> HTML</li>
  <li><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="20" height="20"/> CSS</li>
  <li><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="20" height="20"/> PHP</li>
</ul>
<h3>FERRAMENTAS UTILIZADAS</h3>
<p>As seguintes ferramentas foram usadas na construção do projeto:</p>
<ul>
	<li><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" width="20" height="20"/> Visual Studio Code</li>
</ul>	
<h1>PDF gerado do contrato termo de compromisso</h1>
<img src="https://github.com/kevenescovedo/modulo_gerador_pdf_estagio_fatecpp/blob/master/Exemplo_pdf_gerado/Contrato_Compromico_PDF_Gerado.png"/>
<h1>PDF gerado do contrato de convenio</h1>
<img src="https://github.com/kevenescovedo/modulo_gerador_pdf_estagio_fatecpp/blob/master/Exemplo_pdf_gerado/Contrato_Convenio_PDF_Gerado.png"/>

## Autores
- [@edsonbilla](https://www.github.com/edsonbila)
- [@kevenEscovedo](https://www.github.com/kevenescovedo)


![Logo](https://qb-assets.querobolsa.com.br/logos/colorido/large/2408/logo_1523024190.png)


## Instalação

Instale o projeto e chame ela da seguinte forma

```PHP
  require_once("modulo_gerador_pdf_estagio_fatecpp/contrato.php");

```
    
## Usado por

Esse projeto é usado pelas seguintes empresas:

- FATEC PRESIDENTE PRUDENTE


## Uso/Exemplos

```PHP
// criar termo compromisso
$contratoCompromisso = new TermoCompromisso();
$contratoCompromisso->razaoSocial = "Coca Cola Indústrias Ltd";
$contratoCompromisso->cnpjEmpresa = "11.287.551/0001-02";
$contratoCompromisso->nomeEstagiario = "Dione Ferrari da italia";
$contratoCompromisso->rgEstagiario = "57.084.574-X";
$contratoCompromisso->enderecoEstagiario = "Rua Luis Carlos Ferrari";
$contratoCompromisso->horarioSemanal = "4";
$contratoCompromisso->totalHorasSemanais = "20 ";
$contratoCompromisso->dataInicio = '24/04/2022';
$contratoCompromisso->dataFim = "24/04/2023";
$contratoCompromisso->apoliceSeguro = "12-32-567-890";
$contratoCompromisso->nomeSeguradora = "Porto Seguro";
$contratoCompromisso->nomeRepresentanteEmpresa = "Edilson da Silva";
$contratoCompromisso->nomeOrientador = "Zé povinho da silva";
$contratoCompromisso->atividadesEstagio = "Tudo e muito mais";
$contratoCompromisso->dataInicioContrato = "03/04/2022";

// criar convênio

$termoConvenio = new TermoConvenio();

$termoConvenio->razaoSocial = "Coca Cola Indústrias Ltd";
$termoConvenio->cnpjEmpresa = "11.287.551/0001-02";
$termoConvenio->nomeEstagiario = "Dione Ferrari da italia";
$termoConvenio->rgEstagiario = "57.084.574-X";
$termoConvenio->enderecoEstagiario = "Rua Luis Carlos Ferrari";
$termoConvenio->horarioSemanal = "4";
$termoConvenio->totalHorasSemanais = "20 ";
$termoConvenio->dataInicio = '24/04/2022';
$termoConvenio->dataFim = "24/04/2023";
$termoConvenio->apoliceSeguro = "12-32-567-890";
$termoConvenio->nomeSeguradora = "Porto Seguro";
$termoConvenio->nomeRepresentanteEmpresa = "Edilson da Silva";
$termoConvenio->nomeOrientador = "Zé povinho da silva";
$termoConvenio->atividadesEstagio = "Tudo e muitos mais";
$termoConvenio->dataInicioContrato = "03/04/2022";

$termoConvenio->enderecoEmpresa = "Rua Matilde Rosas Brancas";
$termoConvenio->data = "07/03/2022";
$termoConvenio->rgOrientadorEstagio = "45.852.156-X";
$termoConvenio->nomeCordenadorCurso = "keven de Oliveira";
$termoConvenio->rgCordenadorCurso = "85.24.654-X";

// a funcão 'gerarPDF' está presentes em todos objetos ela recebe como parametro o nome do arquivo 
//que deseja e já irá mostrar na tela o seu gerarPDF

$termoConvenio->gerarPDF("TermoConvenio");
$termoCompromisso->gerarPDF("TermoCompromisso");




```
