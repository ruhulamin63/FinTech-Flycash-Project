import React from "react";
import { Redirect, Route } from "react-router-dom";
import { getEmail } from "./components/auth/connect/getSession";

const PublicRoute = ({component: Component, ...rest}) => {
    return (
        <>
            <Route
                {...rest}
                render={props =>{
                    return !getEmail() ? <Component {...props} />
<<<<<<< HEAD
<<<<<<< HEAD:flycash-react/src/PublicRoute.js
                    : <Redirect to={{ pathname: "/customer-dashboard"}}/>                
=======
                    : <Redirect to={{ pathname: "/officer-dashboard"}}/>                
>>>>>>> officer:flycash-react/src/PublicRouteOfficer.js
=======
                    : <Redirect to={{ pathname: "/officer-dashboard"}}/>                
>>>>>>> customer
                } }
            />
        </>
        
    )
}

export default PublicRoute;