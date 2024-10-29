import Item from './item.jsx';

function lista({lista}) 
{
    return lista.map((nome, index) => {
        return (
          <>            
            <Item key={nome} nome={nome} />
          </>
        )
      })

}
export default lista;