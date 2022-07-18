<?php 


namespace App\Models;

class FuncionarioModel extends Model {
    private $CODFUNC;
    private $MATRICULA;
    private $MATRICULANOVA;
    private $VINCULO;
    private $RG;
    private $ORGAOEMISSOR;
    private $DATAINCLUSAO;
    private $NOME;
    private $NOMEGUERRA;
    private $POSTOGRADUACAO;
    private $CODPOSTOGRADUACAO_QUADROS;
    private $NOMEPAI;
    private $NOMEMAE;
    private $TS;
    private $FRH;
    private $NATURALIDADE;
    private $UFNATURALIDADE;
    private $FD1;
    private $FD2;
    private $DATANASCIMENTO;
    private $CPF;
    private $PASEP;
    private $REGNASCIMENTO;
    private $LOCALEXPEDICAO;
    private $DATAEXPEDICAO;
    private $TIPO;
    private $SITUACAO;
    private $FOTO;
    private $DATASITUACAO;
    




    /**
     * Get the value of CODFUNC
     */ 
    public function getCODFUNC()
    {
        return $this->CODFUNC;
    }

    /**
     * Get the value of MATRICULA
     */ 
    public function getMATRICULA()
    {
        return $this->MATRICULA;
    }

    /**
     * Get the value of MATRICULANOVA
     */ 
    public function getMATRICULANOVA()
    {
        return $this->MATRICULANOVA;
    }

    /**
     * Get the value of VINCULO
     */ 
    public function getVINCULO()
    {
        return $this->VINCULO;
    }

    /**
     * Get the value of RG
     */ 
    public function getRG()
    {
        return $this->RG;
    }

    /**
     * Set the value of RG
     *
     * @return  self
     */ 
    public function setRG($RG)
    {
        $this->RG = $RG;

        return $this;
    }

    /**
     * Get the value of ORGAOEMISSOR
     */ 
    public function getORGAOEMISSOR()
    {
        return $this->ORGAOEMISSOR;
    }

    /**
     * Set the value of ORGAOEMISSOR
     *
     * @return  self
     */ 
    public function setORGAOEMISSOR($ORGAOEMISSOR)
    {
        $this->ORGAOEMISSOR = $ORGAOEMISSOR;

        return $this;
    }

    /**
     * Get the value of DATAINCLUSAO
     */ 
    public function getDATAINCLUSAO()
    {
        return $this->DATAINCLUSAO;
    }

    /**
     * Set the value of DATAINCLUSAO
     *
     * @return  self
     */ 
    public function setDATAINCLUSAO($DATAINCLUSAO)
    {
        $this->DATAINCLUSAO = $DATAINCLUSAO;

        return $this;
    }

    /**
     * Get the value of NOME
     */ 
    public function getNOME()
    {
        return $this->NOME;
    }

    /**
     * Set the value of NOME
     *
     * @return  self
     */ 
    public function setNOME($NOME)
    {
        $this->NOME = $NOME;

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
     * Get the value of POSTOGRADUACAO
     */ 
    public function getPOSTOGRADUACAO()
    {
        return $this->POSTOGRADUACAO;
    }

    /**
     * Set the value of POSTOGRADUACAO
     *
     * @return  self
     */ 
    public function setPOSTOGRADUACAO($POSTOGRADUACAO)
    {
        $this->POSTOGRADUACAO = $POSTOGRADUACAO;

        return $this;
    }

    /**
     * Get the value of CODPOSTOGRADUACAO_QUADROS
     */ 
    public function getCODPOSTOGRADUACAO_QUADROS()
    {
        return $this->CODPOSTOGRADUACAO_QUADROS;
    }

    /**
     * Set the value of CODPOSTOGRADUACAO_QUADROS
     *
     * @return  self
     */ 
    public function setCODPOSTOGRADUACAO_QUADROS($CODPOSTOGRADUACAO_QUADROS)
    {
        $this->CODPOSTOGRADUACAO_QUADROS = $CODPOSTOGRADUACAO_QUADROS;

        return $this;
    }

    /**
     * Get the value of NOMEPAI
     */ 
    public function getNOMEPAI()
    {
        return $this->NOMEPAI;
    }

    /**
     * Set the value of NOMEPAI
     *
     * @return  self
     */ 
    public function setNOMEPAI($NOMEPAI)
    {
        $this->NOMEPAI = $NOMEPAI;

        return $this;
    }

    /**
     * Get the value of NOMEMAE
     */ 
    public function getNOMEMAE()
    {
        return $this->NOMEMAE;
    }

    /**
     * Set the value of NOMEMAE
     *
     * @return  self
     */ 
    public function setNOMEMAE($NOMEMAE)
    {
        $this->NOMEMAE = $NOMEMAE;

        return $this;
    }

    /**
     * Get the value of TS
     */ 
    public function getTS()
    {
        return $this->TS;
    }

    /**
     * Set the value of TS
     *
     * @return  self
     */ 
    public function setTS($TS)
    {
        $this->TS = $TS;

        return $this;
    }

    /**
     * Get the value of FRH
     */ 
    public function getFRH()
    {
        return $this->FRH;
    }

    /**
     * Set the value of FRH
     *
     * @return  self
     */ 
    public function setFRH($FRH)
    {
        $this->FRH = $FRH;

        return $this;
    }

    /**
     * Get the value of NATURALIDADE
     */ 
    public function getNATURALIDADE()
    {
        return $this->NATURALIDADE;
    }

    /**
     * Set the value of NATURALIDADE
     *
     * @return  self
     */ 
    public function setNATURALIDADE($NATURALIDADE)
    {
        $this->NATURALIDADE = $NATURALIDADE;

        return $this;
    }

    /**
     * Get the value of UFNATURALIDADE
     */ 
    public function getUFNATURALIDADE()
    {
        return $this->UFNATURALIDADE;
    }

    /**
     * Set the value of UFNATURALIDADE
     *
     * @return  self
     */ 
    public function setUFNATURALIDADE($UFNATURALIDADE)
    {
        $this->UFNATURALIDADE = $UFNATURALIDADE;

        return $this;
    }

    /**
     * Get the value of FD1
     */ 
    public function getFD1()
    {
        return $this->FD1;
    }

    /**
     * Set the value of FD1
     *
     * @return  self
     */ 
    public function setFD1($FD1)
    {
        $this->FD1 = $FD1;

        return $this;
    }

    /**
     * Get the value of FD2
     */ 
    public function getFD2()
    {
        return $this->FD2;
    }

    /**
     * Set the value of FD2
     *
     * @return  self
     */ 
    public function setFD2($FD2)
    {
        $this->FD2 = $FD2;

        return $this;
    }

    /**
     * Get the value of DATANASCIMENTO
     */ 
    public function getDATANASCIMENTO()
    {
        return $this->DATANASCIMENTO;
    }

    /**
     * Set the value of DATANASCIMENTO
     *
     * @return  self
     */ 
    public function setDATANASCIMENTO($DATANASCIMENTO)
    {
        $this->DATANASCIMENTO = $DATANASCIMENTO;

        return $this;
    }

    /**
     * Get the value of CPF
     */ 
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Set the value of CPF
     *
     * @return  self
     */ 
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    /**
     * Get the value of PASEP
     */ 
    public function getPASEP()
    {
        return $this->PASEP;
    }

    /**
     * Set the value of PASEP
     *
     * @return  self
     */ 
    public function setPASEP($PASEP)
    {
        $this->PASEP = $PASEP;

        return $this;
    }

    /**
     * Get the value of REGNASCIMENTO
     */ 
    public function getREGNASCIMENTO()
    {
        return $this->REGNASCIMENTO;
    }

    /**
     * Set the value of REGNASCIMENTO
     *
     * @return  self
     */ 
    public function setREGNASCIMENTO($REGNASCIMENTO)
    {
        $this->REGNASCIMENTO = $REGNASCIMENTO;

        return $this;
    }

    /**
     * Get the value of LOCALEXPEDICAO
     */ 
    public function getLOCALEXPEDICAO()
    {
        return $this->LOCALEXPEDICAO;
    }

    /**
     * Set the value of LOCALEXPEDICAO
     *
     * @return  self
     */ 
    public function setLOCALEXPEDICAO($LOCALEXPEDICAO)
    {
        $this->LOCALEXPEDICAO = $LOCALEXPEDICAO;

        return $this;
    }

    /**
     * Get the value of DATAEXPEDICAO
     */ 
    public function getDATAEXPEDICAO()
    {
        return $this->DATAEXPEDICAO;
    }

    /**
     * Set the value of DATAEXPEDICAO
     *
     * @return  self
     */ 
    public function setDATAEXPEDICAO($DATAEXPEDICAO)
    {
        $this->DATAEXPEDICAO = $DATAEXPEDICAO;

        return $this;
    }

    /**
     * Get the value of TIPO
     */ 
    public function getTIPO()
    {
        return $this->TIPO;
    }

    /**
     * Set the value of TIPO
     *
     * @return  self
     */ 
    public function setTIPO($TIPO)
    {
        $this->TIPO = $TIPO;

        return $this;
    }

    /**
     * Get the value of SITUACAO
     */ 
    public function getSITUACAO()
    {
        return $this->SITUACAO;
    }

    /**
     * Set the value of SITUACAO
     *
     * @return  self
     */ 
    public function setSITUACAO($SITUACAO)
    {
        $this->SITUACAO = $SITUACAO;

        return $this;
    }

    /**
     * Get the value of FOTO
     */ 
    public function getFOTO()
    {
        return $this->FOTO;
    }

    /**
     * Set the value of FOTO
     *
     * @return  self
     */ 
    public function setFOTO($FOTO)
    {
        $this->FOTO = $FOTO;

        return $this;
    }

    /**
     * Get the value of DATASITUACAO
     */ 
    public function getDATASITUACAO()
    {
        return $this->DATASITUACAO;
    }

    /**
     * Set the value of DATASITUACAO
     *
     * @return  self
     */ 
    public function setDATASITUACAO($DATASITUACAO)
    {
        $this->DATASITUACAO = $DATASITUACAO;

        return $this;
    }
}
