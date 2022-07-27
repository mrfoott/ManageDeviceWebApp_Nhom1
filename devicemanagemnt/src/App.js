import logo from './logo.svg';
import './App.css';
//import react-router-dom
import {
  Switch,
  Route,
  BrowserRouter
} from 'react-router-dom';

import SideNav from './SideNav/SideNav';
import Navigation from "./Navigation/Nav";
import Users from "./Users/Users";
import Inventories from './Inventories/Inventories';
import Dashboard from './Dashboard/Dashboard';


function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <header className="App-header">
          <div className='container-fluid'>
            <Navigation />
            <div className='row'>
              <div className='col-md-2'>
                <SideNav />
              </div>
              <div className='col-md-9'>
                <Switch>
                  <Route path="/" exact>
                    <Dashboard />
                  </Route>
                  <Route path="/users">
                    <Users />
                  </Route>
                  <Route path="/inventories">
                    <Inventories />
                  </Route>
                </Switch>
              </div>
            </div>
          </div>
        </header>
      </div>
    </BrowserRouter>
  );
}

export default App;
