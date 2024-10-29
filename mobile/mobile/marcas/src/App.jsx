import { useState } from 'react'
import './App.css'
import Item from './item.jsx';
import Lista from './lista.jsx';

function App() {

  const lista = ['nike', 'adidas', 'oasis', 'mizuno'];
  const [listaUpdate, updateLista] = useState();

  function updateLista() {
    lista.push('teste2');
    return lista;
  }

  const adicionar = () => {
    lista.push('teste2');
  }

  return (
    <>
      <div>
        <button>Inicio</button>
        <button>Carregar lista</button>
        <button onClick={adicionar}>Adicionar</button>
      </div>

      <Lista lista={lista} />

    {/**
      <Item nome={lista[0]} />
      <Item nome={lista[1]} />
      <Item nome={lista[2]} /> */}

    </>
  )
}

export default App
