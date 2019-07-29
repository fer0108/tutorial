import React, {useState, useEffect} from 'react'
import Nivel from './Nivel'
import Loading from './Loading'




export default function NivelList(props) {

    const [loading, setLoading] = useState(true);

    const [niveles, setNiveles] = useState([]);

    const cargarNiveles = () => {
        let url=  `/api/cursos/${props.match.params.id}/nivel`
        axios.get(url)
        .then(resp=>{
            setLoading(false)
            setNiveles(resp.data)

        })

        .catch(err=> {
            setLoading(false)
            console.log('error al cargar los Niveles. Falle')
        })
    }

    useEffect(cargarNiveles,[props.match.params.id])

    return (

<div className="container">
    <h1 className="display-5 text-center">LISTA NIVELES</h1>

        <div className="row">

            <div className="col-md-6">
                <table className="table table-sm table-hover table-bordered">
                    <thead className="thead-dark">
                        <tr className="text-center">
                            <th>Nivel</th>
                            <th>Descripcion</th>
                            <th>Lecciones</th>

                        </tr>
                    </thead>
                    <tbody class="table-light">


                        {
                            loading && <Loading/>
                        }

                        {
                            loading == false && niveles.map(item => <Nivel {...item} key={item.id} />)
                        }



                    </tbody>
                </table>

            </div>
        </div>
</div>





        // <div className="container">
        // <table class="table table-hover">
        //     <thead>
        //         <tr className="row">
        //         <th className="col">Nivel</th>
        //         <th className="col">Descripcion</th>
        //         <th className="col">Curso</th>

        //         </tr>
        //     </thead>
        //     <tbody>

        //       <tr className="row">
        //             <th className="col">

        //             {
        //                 loadingN && <LoadingN/>
        //             }

        //             {
        //                 loadingN == false && niveles.map(item => <Nivel {...item} key={item.id} />)
        //             }
        //             </th>
        //     </tr>

        //     </tbody>
        // </table>
        // </div>

    )
}

