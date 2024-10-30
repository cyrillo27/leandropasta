import { useState } from 'react'
import './App.css'
import Item from './item.jsx';
import Lista from './lista.jsx';
import ListaDeMarcas from './ListaDeMarcas.jsx';

let lista = ['nike', 'adidas', 'oasis', 'mizuno'];
let marcas = [
  {
    id: 0,
    nome: "nike",
    cor: "preto" 
  },
  {
    id: 1,
    nome: "adidas",
    cor: "listrado" 
  }
];

function App() {

  const [listaUpdate, updateLista] = useState(lista);
  const [listaMarcas, atualizarListaDeMarcas] = useState(marcas);
  const [pagina, definirPagina] = useState("lista");

  const adicionar =  () => {
    lista = lista.concat([lista.length]);
    updateLista(lista)
  }

  const carregarLista = () => {
    definirPagina("lista");
  }
  
  const carregarInicio = () => {
    definirPagina("inicio");
  }

  return (
    <>
      <div>
        <button onClick={carregarInicio}>Inicio</button>
        <button onClick={carregarLista}>Carregar lista</button>
        <button onClick={() => definirPagina("marcas")}>Carregar Marcas</button>        
      </div>

      {pagina == "inicio" ? (<h2>Inicio</h2>) : (<></>)}

      {pagina == "lista" && (
        <>
          <br/>
          <button onClick={adicionar}>Adicionar</button>
          <Lista lista={listaUpdate} />
        </>
      )}

      {pagina == "marcas" ? (
        <ListaDeMarcas lista={listaMarcas} />
      ) : (<></>)}      
      
    </>
  )
}

export default App
