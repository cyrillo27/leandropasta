import { useState } from 'react'
import Listagem from './Lista'
import './App.css'

function App() {
  const [lista, setLista] = useState(['a', 'b', 'c'])

  const addListItem = () => {
      let value = prompt("nome do item");
      setLista(() => lista.concat([value]))
  }
  
  const removeListItem = (index) => {
    setLista(() => lista.filter((e,i) => i !== index))
  }

  const editListItem = (index) => {
    let value = prompt("nome do item");
    
    setLista(() => lista.map((valor, indice) => {
        if(indice !== index) {
          return valor;
        }
        return value;
    }))
  }

  return (
    <Listagem 
      remove={removeListItem} 
      add={addListItem} 
      edit={editListItem}
      lista={lista} 
    />
  )
}

export default App
