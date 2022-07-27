import React from 'react';
import {
    Link, NavLink
} from 'react-router-dom';


class Nav extends React.Component {

    render() {
        return (
            <nav className="navbar fixed-top navbar-light" style={{ backgroundColor: "#CACACA" }}>
                <div className="container-fluid">
                    <NavLink className="navbar-brand" to="/" exact>Inventories.</NavLink>
                </div>
            </nav >
        )
    }
}

export default Nav;