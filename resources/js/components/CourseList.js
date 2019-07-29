import React, { useState, useEffect } from 'react'
import Course from './Course'
import Loading from './Loading';

export default function CourseList() {
    const [loading, setLoading] = useState(true);
    const [cursos, setCursos] = useState([]);
    const cargarCursos =() => {
        Axios.get('/cursos')
            .then(resp => {
                setLoading(resp.data)
            })
            .catch(err => {
                setLoading(false)
                console.log('Error al cargar los datos')
            })
    }

useEffect(cargarCursos, [])

return(
    <section className="row">
        {
            loading && <Loading/>
        }
        {
            loading = false && cursos.map(item => <Course {... item} key={item.id}/>)
        }
    </section>
    )
}