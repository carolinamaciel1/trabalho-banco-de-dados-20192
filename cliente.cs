using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Sistemaloja
{
    #region Cliente
    public class Cliente
    {
        #region Member Variables
        protected int _id_cliente;
        protected string _nome;
        protected int _cpf;
        protected int _rg;
        protected string _sexo;
        protected string _rua;
        protected int _num_rua;
        protected string _complemento;
        protected string _cidade;
        protected string _estado;
        protected int _celular;
        protected int _telefone;
        #endregion
        #region Constructors
        public Cliente() { }
        public Cliente(string nome, int cpf, int rg, string sexo, string rua, int num_rua, string complemento, string cidade, string estado, int celular, int telefone)
        {
            this._nome=nome;
            this._cpf=cpf;
            this._rg=rg;
            this._sexo=sexo;
            this._rua=rua;
            this._num_rua=num_rua;
            this._complemento=complemento;
            this._cidade=cidade;
            this._estado=estado;
            this._celular=celular;
            this._telefone=telefone;
        }
        #endregion
        #region Public Properties
        public virtual int Id_cliente
        {
            get {return _id_cliente;}
            set {_id_cliente=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual int Cpf
        {
            get {return _cpf;}
            set {_cpf=value;}
        }
        public virtual int Rg
        {
            get {return _rg;}
            set {_rg=value;}
        }
        public virtual string Sexo
        {
            get {return _sexo;}
            set {_sexo=value;}
        }
        public virtual string Rua
        {
            get {return _rua;}
            set {_rua=value;}
        }
        public virtual int Num_rua
        {
            get {return _num_rua;}
            set {_num_rua=value;}
        }
        public virtual string Complemento
        {
            get {return _complemento;}
            set {_complemento=value;}
        }
        public virtual string Cidade
        {
            get {return _cidade;}
            set {_cidade=value;}
        }
        public virtual string Estado
        {
            get {return _estado;}
            set {_estado=value;}
        }
        public virtual int Celular
        {
            get {return _celular;}
            set {_celular=value;}
        }
        public virtual int Telefone
        {
            get {return _telefone;}
            set {_telefone=value;}
        }
        #endregion
    }
    #endregion
}