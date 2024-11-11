function Listagem ({lista, add, remove, edit}) {
    

    const listaFormatada = lista.map((item, index) => {
        return (
        <li key={index} className="flex mb-1">
            <div className="mr-2 ">{item}</div>
            <button className="mr-2"
                    onClick={() => remove(index)}>
                        remover
            </button>
            <button onClick={() => edit(index)}>editar</button>
        </li>
        );
    })

    return (
        <>
            <button onClick={add}>adicionar</button>
            <ul>
                {listaFormatada}
            </ul>        
        </>
    )
}

export default Listagem;