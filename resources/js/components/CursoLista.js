import React, { useState, useEffect } from 'react'
import Loading from './Loading';

const CursoLista = (props) => {
    const cargarCurso = () => {
        let url= `/cursos/${props.match.params.id}`
        axios.get(url)
            .then(respu => {
                setCurso(respu.data)
                setLoading(false)
                console.log(respu.data)
            })
            .catch(err => {
                setLoading(false)
                console.log('error al cargar las cursos')
            })
    }
    const [loading, setLoading] = useState(true)
    const [curso, setCurso] = useState({})
    useEffect(cargarCurso, [props.match.params.id])

    if (loading)
        return <Loading />
    return(
        <div className="container mt-5">
            <div className="row">
                <div className="col-sm-4">
                    <div className="card">
                        <p></p>
                        <div className="card-body">
                            <h2 className="card-title">
                                 {curso.curso ? curso.curso : 'Nombre del curso'}
                            </h2>
                            <p className="card-text">
                                {curso.descripcion ? curso.descripcion : 'descripcion del Curso'}
                            </p>
                            <p className="card-text">
                                {curso.imagen  ? curso.imagen : 'link de imagen'}
                            </p>
                        </div>
                    </div>
                </div>
                <div className="col-sm-8">
                    <div className="card">
                        <div className="card-header">Detalles del curso</div>
                        <div className="card-body">
                                Desarrollado por: {curso.desarrollador.nombres}  {curso.desarrollador.apellidos}
                                    <div className="row">
                                        <div className="col-sm-12">
                                            Niveles

                                            {
                                                curso.niveles.map(nivel => {
                                                    return(
                                                        <h2 key={nivel.id}>{nivel.nivel}</h2>
                                                    )
                                                })
                                            }



                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 )}
export default CursoLista
