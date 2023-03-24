import { useState } from 'react'
import instagram from './assets/instagram.svg'
import facebook from './assets/facebook.svg'
import twitter from './assets/twitter.svg'
import './App.css'

function TelaLogin() {
  return (
    <div className="tela-login">
      <h1>Tela de Login</h1>
      <div className="campo-usuario campo">
        <label htmlFor="input-usuario">Usuário</label>
        <input name="input-usuario" type="text"/>
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
    </div>
  )
}

function App() {

  return (
    <TelaLogin></TelaLogin>
  )
}

export default App
