import { useState } from 'react'
import TelaLogin from './tela_de_login'
import './App.css'

function NavBar() {
  return (
    <div className="Navbar">
      <img className="logo" alt="Logo" />
      <div className="navbar-clickable">

      </div>
    </div>
  )
}

function TelaInicio() {
  return (
    <>
      <NavBar></NavBar>
    </>
  )
}


function App() {

  return (
    <TelaLogin></TelaLogin>
  )
}

export default App
