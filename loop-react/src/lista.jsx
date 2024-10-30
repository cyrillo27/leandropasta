import Item from './item.jsx';
import {Fragment } from 'react';

function lista({lista})
{
    return lista.map((nomeDaMarca, index) => {
        return (
            <Item nome={nomeDaMarca} key={index}></Item>
        )
      })

}

export default lista;
