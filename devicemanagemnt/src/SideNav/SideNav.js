import React from 'react';
import "./SideNav.css";
//import react-route
import {
    NavLink, Link
} from 'react-router-dom';

class SideNav extends React.Component {

    render() {
        return (
            <div className="sidebar">
                <NavLink exact to="/" activeClassName="active">Home</NavLink>
                <NavLink to="/inventories" activeClassName="active">Inventories</NavLink>
                <NavLink to="/users" activeClassName='active'>Users</NavLink>
                {/* <NavLink to="/departments" activeClassName='active'>Departments</NavLink>
                <NavLink to="/roles" activeClassName='active' >Roles</NavLink>
                <NavLink to="/tickets" activeClassName='active'>Tickets</NavLink> 
                <NavLink to="/categories" activeClassName='active'>Categories</NavLink> */}
            </div>
        )
    }
}

export default SideNav;