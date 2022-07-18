<?php 


namespace App\Models;

class F_ComplementoModel extends Model {
    private $CODCOMPL;
    private $CODFUNC;
    private $CNH;
    private $CATEGORIA;
    private $VALIDADECNH;
    private $TITULO;
    private $ZONA;
    private $SECAO;
    private $CIDADETITULO;
    private $UFTITULO;
    private $ENDERECO;
    private $BAIRRO;
    private $CEP;
    private $CIDADE;
    private $UF;
    private $EMAIL1;
    private $EMAIL2;
    private $CELULAR;
    private $TRABALHO;
    private $RESIDENCIAL;
    private $RECADOS;
    private $NOMEGUERRA;
    private $SEXO;
    private $ESTADOCIVIL;
    private $CORPELE;
    private $LOTACAO;
    private $RGCIVIL;
    private $ORGAORGCIVIL;
    private $UFRGCIVIL;
    private $ALTURA;
    private $CABELO;
    private $OLHOS;
    private $DOCEXERCITO;
    private $COMPORTAMENTO;
    private $DATAEMISSAOTITULO;
    private $DATAEMISSAORGCIVIL;
    private $GRAUINSTRUCAO;
    private $FINANCEIROBANCO;
    private $FINANCEIROAGENCIA;
    private $FINANCEIROCONTA;

    /**
     * Get the value of CODCOMPL
     */ 
    public function getCODCOMPL()
    {
        return $this->CODCOMPL;
    }

    /**
     * Get the value of CODFUNC
     */ 
    public function getCODFUNC()
    {
        return $this->CODFUNC;
    }

    /**
     * Get the value of CNH
     */ 
    public function getCNH()
    {
        return $this->CNH;
    }

    /**
     * Set the value of CNH
     *
     * @return  self
     */ 
    public function setCNH($CNH)
    {
        $this->CNH = $CNH;

        return $this;
    }

    /**
     * Get the value of CATEGORIA
     */ 
    public function getCATEGORIA()
    {
        return $this->CATEGORIA;
    }

    /**
     * Set the value of CATEGORIA
     *
     * @return  self
     */ 
    public function setCATEGORIA($CATEGORIA)
    {
        $this->CATEGORIA = $CATEGORIA;

        return $this;
    }

    /**
     * Get the value of VALIDADECNH
     */ 
    public function getVALIDADECNH()
    {
        return $this->VALIDADECNH;
    }

    /**
     * Set the value of VALIDADECNH
     *
     * @return  self
     */ 
    public function setVALIDADECNH($VALIDADECNH)
    {
        $this->VALIDADECNH = $VALIDADECNH;

        return $this;
    }

  
    /**
     * Get the value of TITULO
     */ 
    public function getTITULO()
    {
        return $this->TITULO;
    }

    /**
     * Set the value of TITULO
     *
     * @return  self
     */ 
    public function setTITULO($TITULO)
    {
        $this->TITULO = $TITULO;

        return $this;
    }

    /**
     * Get the value of ZONA
     */ 
    public function getZONA()
    {
        return $this->ZONA;
    }

    /**
     * Set the value of ZONA
     *
     * @return  self
     */ 
    public function setZONA($ZONA)
    {
        $this->ZONA = $ZONA;

        return $this;
    }

    /**
     * Get the value of SECAO
     */ 
    public function getSECAO()
    {
        return $this->SECAO;
    }

    /**
     * Set the value of SECAO
     *
     * @return  self
     */ 
    public function setSECAO($SECAO)
    {
        $this->SECAO = $SECAO;

        return $this;
    }

    /**
     * Get the value of CIDADETITULO
     */ 
    public function getCIDADETITULO()
    {
        return $this->CIDADETITULO;
    }

    /**
     * Set the value of CIDADETITULO
     *
     * @return  self
     */ 
    public function setCIDADETITULO($CIDADETITULO)
    {
        $this->CIDADETITULO = $CIDADETITULO;

        return $this;
    }

    /**
     * Get the value of UFTITULO
     */ 
    public function getUFTITULO()
    {
        return $this->UFTITULO;
    }

    /**
     * Set the value of UFTITULO
     *
     * @return  self
     */ 
    public function setUFTITULO($UFTITULO)
    {
        $this->UFTITULO = $UFTITULO;

        return $this;
    }

    /**
     * Get the value of ENDERECO
     */ 
    public function getENDERECO()
    {
        return $this->ENDERECO;
    }

    /**
     * Set the value of ENDERECO
     *
     * @return  self
     */ 
    public function setENDERECO($ENDERECO)
    {
        $this->ENDERECO = $ENDERECO;

        return $this;
    }

    /**
     * Get the value of BAIRRO
     */ 
    public function getBAIRRO()
    {
        return $this->BAIRRO;
    }

    /**
     * Set the value of BAIRRO
     *
     * @return  self
     */ 
    public function setBAIRRO($BAIRRO)
    {
        $this->BAIRRO = $BAIRRO;

        return $this;
    }

    /**
     * Get the value of CEP
     */ 
    public function getCEP()
    {
        return $this->CEP;
    }

    /**
     * Set the value of CEP
     *
     * @return  self
     */ 
    public function setCEP($CEP)
    {
        $this->CEP = $CEP;

        return $this;
    }

    /**
     * Get the value of CIDADE
     */ 
    public function getCIDADE()
    {
        return $this->CIDADE;
    }

    /**
     * Set the value of CIDADE
     *
     * @return  self
     */ 
    public function setCIDADE($CIDADE)
    {
        $this->CIDADE = $CIDADE;

        return $this;
    }

    /**
     * Get the value of UF
     */ 
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Set the value of UF
     *
     * @return  self
     */ 
    public function setUF($UF)
    {
        $this->UF = $UF;

        return $this;
    }

    /**
     * Get the value of EMAIL1
     */ 
    public function getEMAIL1()
    {
        return $this->EMAIL1;
    }

    /**
     * Set the value of EMAIL1
     *
     * @return  self
     */ 
    public function setEMAIL1($EMAIL1)
    {
        $this->EMAIL1 = $EMAIL1;

        return $this;
    }

    /**
     * Get the value of EMAIL2
     */ 
    public function getEMAIL2()
    {
        return $this->EMAIL2;
    }

    /**
     * Set the value of EMAIL2
     *
     * @return  self
     */ 
    public function setEMAIL2($EMAIL2)
    {
        $this->EMAIL2 = $EMAIL2;

        return $this;
    }

    /**
     * Get the value of CELULAR
     */ 
    public function getCELULAR()
    {
        return $this->CELULAR;
    }

    /**
     * Set the value of CELULAR
     *
     * @return  self
     */ 
    public function setCELULAR($CELULAR)
    {
        $this->CELULAR = $CELULAR;

        return $this;
    }

    /**
     * Get the value of TRABALHO
     */ 
    public function getTRABALHO()
    {
        return $this->TRABALHO;
    }

    /**
     * Set the value of TRABALHO
     *
     * @return  self
     */ 
    public function setTRABALHO($TRABALHO)
    {
        $this->TRABALHO = $TRABALHO;

        return $this;
    }

    /**
     * Get the value of RESIDENCIAL
     */ 
    public function getRESIDENCIAL()
    {
        return $this->RESIDENCIAL;
    }

    /**
     * Set the value of RESIDENCIAL
     *
     * @return  self
     */ 
    public function setRESIDENCIAL($RESIDENCIAL)
    {
        $this->RESIDENCIAL = $RESIDENCIAL;

        return $this;
    }

    /**
     * Get the value of RECADOS
     */ 
    public function getRECADOS()
    {
        return $this->RECADOS;
    }

    /**
     * Set the value of RECADOS
     *
     * @return  self
     */ 
    public function setRECADOS($RECADOS)
    {
        $this->RECADOS = $RECADOS;

        return $this;
    }

    /**
     * Get the value of NOMEGUERRA
     */ 
    public function getNOMEGUERRA()
    {
        return $this->NOMEGUERRA;
    }

    /**
     * Set the value of NOMEGUERRA
     *
     * @return  self
     */ 
    public function setNOMEGUERRA($NOMEGUERRA)
    {
        $this->NOMEGUERRA = $NOMEGUERRA;

        return $this;
    }

    /**
     * Get the value of SEXO
     */ 
    public function getSEXO()
    {
        return $this->SEXO;
    }

    /**
     * Set the value of SEXO
     *
     * @return  self
     */ 
    public function setSEXO($SEXO)
    {
        $this->SEXO = $SEXO;

        return $this;
    }

    /**
     * Get the value of ESTADOCIVIL
     */ 
    public function getESTADOCIVIL()
    {
        return $this->ESTADOCIVIL;
    }

    /**
     * Set the value of ESTADOCIVIL
     *
     * @return  self
     */ 
    public function setESTADOCIVIL($ESTADOCIVIL)
    {
        $this->ESTADOCIVIL = $ESTADOCIVIL;

        return $this;
    }

    /**
     * Get the value of CORPELE
     */ 
    public function getCORPELE()
    {
        return $this->CORPELE;
    }

    /**
     * Set the value of CORPELE
     *
     * @return  self
     */ 
    public function setCORPELE($CORPELE)
    {
        $this->CORPELE = $CORPELE;

        return $this;
    }

    /**
     * Get the value of LOTACAO
     */ 
    public function getLOTACAO()
    {
        return $this->LOTACAO;
    }

    /**
     * Set the value of LOTACAO
     *
     * @return  self
     */ 
    public function setLOTACAO($LOTACAO)
    {
        $this->LOTACAO = $LOTACAO;

        return $this;
    }

    /**
     * Get the value of RGCIVIL
     */ 
    public function getRGCIVIL()
    {
        return $this->RGCIVIL;
    }

    /**
     * Set the value of RGCIVIL
     *
     * @return  self
     */ 
    public function setRGCIVIL($RGCIVIL)
    {
        $this->RGCIVIL = $RGCIVIL;

        return $this;
    }

    /**
     * Get the value of ORGAORGCIVIL
     */ 
    public function getORGAORGCIVIL()
    {
        return $this->ORGAORGCIVIL;
    }

    /**
     * Set the value of ORGAORGCIVIL
     *
     * @return  self
     */ 
    public function setORGAORGCIVIL($ORGAORGCIVIL)
    {
        $this->ORGAORGCIVIL = $ORGAORGCIVIL;

        return $this;
    }

    /**
     * Get the value of UFRGCIVIL
     */ 
    public function getUFRGCIVIL()
    {
        return $this->UFRGCIVIL;
    }

    /**
     * Set the value of UFRGCIVIL
     *
     * @return  self
     */ 
    public function setUFRGCIVIL($UFRGCIVIL)
    {
        $this->UFRGCIVIL = $UFRGCIVIL;

        return $this;
    }

    /**
     * Get the value of ALTURA
     */ 
    public function getALTURA()
    {
        return $this->ALTURA;
    }

    /**
     * Set the value of ALTURA
     *
     * @return  self
     */ 
    public function setALTURA($ALTURA)
    {
        $this->ALTURA = $ALTURA;

        return $this;
    }

    /**
     * Get the value of CABELO
     */ 
    public function getCABELO()
    {
        return $this->CABELO;
    }

    /**
     * Set the value of CABELO
     *
     * @return  self
     */ 
    public function setCABELO($CABELO)
    {
        $this->CABELO = $CABELO;

        return $this;
    }

    /**
     * Get the value of OLHOS
     */ 
    public function getOLHOS()
    {
        return $this->OLHOS;
    }

    /**
     * Set the value of OLHOS
     *
     * @return  self
     */ 
    public function setOLHOS($OLHOS)
    {
        $this->OLHOS = $OLHOS;

        return $this;
    }

    /**
     * Get the value of DOCEXERCITO
     */ 
    public function getDOCEXERCITO()
    {
        return $this->DOCEXERCITO;
    }

    /**
     * Set the value of DOCEXERCITO
     *
     * @return  self
     */ 
    public function setDOCEXERCITO($DOCEXERCITO)
    {
        $this->DOCEXERCITO = $DOCEXERCITO;

        return $this;
    }

    /**
     * Get the value of COMPORTAMENTO
     */ 
    public function getCOMPORTAMENTO()
    {
        return $this->COMPORTAMENTO;
    }

    /**
     * Set the value of COMPORTAMENTO
     *
     * @return  self
     */ 
    public function setCOMPORTAMENTO($COMPORTAMENTO)
    {
        $this->COMPORTAMENTO = $COMPORTAMENTO;

        return $this;
    }

    /**
     * Get the value of DATAEMISSAOTITULO
     */ 
    public function getDATAEMISSAOTITULO()
    {
        return $this->DATAEMISSAOTITULO;
    }

    /**
     * Set the value of DATAEMISSAOTITULO
     *
     * @return  self
     */ 
    public function setDATAEMISSAOTITULO($DATAEMISSAOTITULO)
    {
        $this->DATAEMISSAOTITULO = $DATAEMISSAOTITULO;

        return $this;
    }

    /**
     * Get the value of DATAEMISSAORGCIVIL
     */ 
    public function getDATAEMISSAORGCIVIL()
    {
        return $this->DATAEMISSAORGCIVIL;
    }

    /**
     * Set the value of DATAEMISSAORGCIVIL
     *
     * @return  self
     */ 
    public function setDATAEMISSAORGCIVIL($DATAEMISSAORGCIVIL)
    {
        $this->DATAEMISSAORGCIVIL = $DATAEMISSAORGCIVIL;

        return $this;
    }

    /**
     * Get the value of GRAUINSTRUCAO
     */ 
    public function getGRAUINSTRUCAO()
    {
        return $this->GRAUINSTRUCAO;
    }

    /**
     * Set the value of GRAUINSTRUCAO
     *
     * @return  self
     */ 
    public function setGRAUINSTRUCAO($GRAUINSTRUCAO)
    {
        $this->GRAUINSTRUCAO = $GRAUINSTRUCAO;

        return $this;
    }

    /**
     * Get the value of FINANCEIROBANCO
     */ 
    public function getFINANCEIROBANCO()
    {
        return $this->FINANCEIROBANCO;
    }

    /**
     * Set the value of FINANCEIROBANCO
     *
     * @return  self
     */ 
    public function setFINANCEIROBANCO($FINANCEIROBANCO)
    {
        $this->FINANCEIROBANCO = $FINANCEIROBANCO;

        return $this;
    }

    /**
     * Get the value of FINANCEIROAGENCIA
     */ 
    public function getFINANCEIROAGENCIA()
    {
        return $this->FINANCEIROAGENCIA;
    }

    /**
     * Set the value of FINANCEIROAGENCIA
     *
     * @return  self
     */ 
    public function setFINANCEIROAGENCIA($FINANCEIROAGENCIA)
    {
        $this->FINANCEIROAGENCIA = $FINANCEIROAGENCIA;

        return $this;
    }

    /**
     * Get the value of FINANCEIROCONTA
     */ 
    public function getFINANCEIROCONTA()
    {
        return $this->FINANCEIROCONTA;
    }

    /**
     * Set the value of FINANCEIROCONTA
     *
     * @return  self
     */ 
    public function setFINANCEIROCONTA($FINANCEIROCONTA)
    {
        $this->FINANCEIROCONTA = $FINANCEIROCONTA;

        return $this;
    }
}