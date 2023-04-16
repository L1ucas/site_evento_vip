import { useState } from 'react'
import instagram from './assets/instagram.svg'
import facebook from './assets/facebook.svg'
import twitter from './assets/twitter.svg'
import './App.css'

export function TelaLogin() {
  return (
      <div className="tela-login-main">
          <div className="tela-login">
              <h1>Tela de Login</h1>
              <div className="campo-usuario campo">
                  <label htmlFor="input-email">Email</label>
                  <input name="input-email" type="email"/>
              </div>
              <div className="campo-senha campo">
                  <label htmlFor="input-senha">Senha</label>
                  <input name="input-senha" type="password"/>
              </div>
              <span><a href="">Esqueceu sua senha?</a></span>
              <button>Próximo</button>
              <div className="campo-redes-sociais">
                  <div className="circulo">
                      <img src={ instagram } alt="Instagram" />
                  </div>
                  <div className="circulo">
                      <img src={ twitter } alt="Twitter" />
                  </div>
                  <div className="circulo">
                      <img src={ facebook } alt="Facebook" />
                  </div>
              </div>
              <span>Não posssui uma conta? <a href="">Inscreva-se</a></span>
          </div>
      </div>
    )
}

export function TelaCadastro() {
  return (
      <div className="tela-login-main">
          <div className="tela-login">
              <h1>Tela de Login</h1>
              <div className="campo-usuario campo">
                  <label htmlFor="input-email">Nome de Usuário</label>
                  <input name="input-email" type="email"/>
              </div>
              <div className="campo-usuario campo">
                  <label htmlFor="input-email">Email</label>
                  <input name="input-email" type="email"/>
              </div>
              <div className="campo-senha campo">
                  <label htmlFor="input-senha">Confirmar email</label>
                  <input name="input-senha" type="password"/>
              </div>
              <div className="campo-senha campo">
                  <label htmlFor="input-senha">Senha</label>
                  <input name="input-senha" type="password"/>
              </div>
              <div className="campo-senha campo">
                  <label htmlFor="input-senha">Confirmar senha</label>
                  <input name="input-senha" type="password"/>
              </div>
              <button>Próximo</button>
              <div className="campo-redes-sociais">
                  <div className="circulo">
                      <img src={ instagram } alt="Instagram" />
                  </div>
                  <div className="circulo">
                      <img src={ twitter } alt="Twitter" />
                  </div>
                  <div className="circulo">
                      <img src={ facebook } alt="Facebook" />
                  </div>
              </div>
              <span>Não posssui uma conta? <a href="">Inscreva-se</a></span>
          </div>
      </div>
    )
}
