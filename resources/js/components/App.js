import React from 'react';
import ReactDom from 'react-dom';
import {HashRouter, Route, Switch} from "react-router-dom";
import CourseList from './CourseList';
import NotFound from './NotFound'
import CursoLista from './CursoLista';


const App = () => {
    return (
        <div className="container">
            <div className="row justify-content-center">
               <CourseList /> 
                               
            </div>
        </div>
    )
}
const Root =() => (
    <HashRouter>
        <switch>
            <Route path="/" exact component={App} />
            <Route path="/curso/:id" exact component={CursoLista} />
            <Route component={NotFound}/>
        </switch>
    </HashRouter>
);

if (document.getElementById('app')) {
    ReactDom.render(<Root />, document.getElementById('app'))
}