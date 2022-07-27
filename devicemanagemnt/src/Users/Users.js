import React from 'react';
import AddUser from './AddUser';
import { withRouter } from 'react-router-dom';
import EditUser from './EditUser';

class Users extends React.Component {

    state = {
        listUsers: [
            { id: '1', name: 'Nguyễn Văn A', department: 'IT', role: '1', assignedDevice: '1', status: '1' },
            { id: '2', name: 'Lê Văn B', department: 'HR', role: '2', assignedDevice: '2', status: '2' },
            { id: '3', name: 'Trần Văn C', department: 'Pharmacity', role: '3', assignedDevice: '3', status: '3' },
            { id: '4', name: 'Nguyễn Văn D', department: 'New Project', role: '4', assignedDevice: '4', status: '4' },
            { id: '5', name: 'Lê Trọng A', department: 'Admin', role: '5', assignedDevice: '5', status: '4' },
        ],
        editUser: {}
    }

    getColor = (status) => {
        if (status === "1" || status === "Working") {
            return "table-success";
        }
        else if (status === "2" || status === "Teminated") {
            return "table-info";
        }
        else if (status === "3" || status === "Temp Teminated") {
            return "table-danger";
        }
        else if (status === "4" || status === "Pending") {
            return "table-warning";
        }
    }

    //Add new Inventory
    addNewUser = (user) => {
        let currentList = this.state.listUsers;
        console.log(user);

        currentList.push(user);

        this.setState({
            listUsers: currentList
        })
    }

    //remove Inventory
    removeUser = (user) => {
        let currentList = this.state.listUsers;

        currentList = currentList.filter(item => item.id !== user.id);

        this.setState({
            listUsers: currentList
        })
    }

    //Edit Inventory
    editUser = (user) => {
        let currentList = this.state.listUsers;
        console.log(user);

        let objIndex = currentList.findIndex(item => item.id === user.id);
        currentList[objIndex].name = user.name;
        currentList[objIndex].assignedDevice = user.assignedDevice;
        currentList[objIndex].department = user.department;
        currentList[objIndex].status = user.status;
        currentList[objIndex].role = user.role;

        this.setState({
            listUsers: currentList
        })
    }


    render() {

        let { listUsers } = this.state;

        //Transform data in table
        let listUsersUpdate = listUsers;
        listUsersUpdate.map((item, index) => {

            //Transform for Categories
            if (item.department === "1") {
                item.department = "IT";
            }
            else if (item.department === "2") {
                item.department = "HR";
            }
            else if (item.department === "3") {
                item.department = "Pharmacity";
            }
            else if (item.department === "4") {
                item.department = "New Project";
            }
            else if (item.department === "5") {
                item.department = "Admin";
            }

            //Transform for Role
            if (item.role === "1") {
                item.role = "IT Manager";
            }
            else if (item.role === "2") {
                item.role = "HR Executive";
            }
            else if (item.role === "3") {
                item.role = "Senior SE";
            }
            else if (item.role === "4") {
                item.role = "SE";
            }
            else if (item.role === "5") {
                item.role = "Admin Executive";
            }

            //Transform for status

            if (item.status === "1") {
                item.status = "Working";
            }
            else if (item.status === "2") {
                item.status = "Teminated";
            }
            else if (item.status === "3") {
                item.status = "Temp Teminated";
            }
            else if (item.status === "4") {
                item.status = "Pending";
            }
        })

        return (
            <>
                <div className='row searchGroup'>
                    <div className='col-10'>
                        <input type="text" className="form-control" value={this.state.searchingText} onInput={(event) => this.handleOnChangeSearchBox(event)} placeholder="Search something..." />
                    </div>
                    <div className='col-2'>
                        <AddUser
                            addNewUser={this.addNewUser}
                        />
                    </div>
                </div>
                <div className='row tableContainer'>
                    <table className="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Assigned Device</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {listUsersUpdate && listUsersUpdate.length > 0 &&
                                listUsersUpdate.map((item, index) => {
                                    return (
                                        <tr className={this.getColor(item.status)}>
                                            <th scope="row" key={item.id}>{item.id}</th>
                                            <td>{item.name}</td>
                                            <td>{item.department}</td>
                                            <td>{item.assignedDevice}</td>
                                            <td>{item.role}</td>
                                            <td>{item.status}</td>
                                            <td><EditUser editedItem={item}
                                                editUser={this.editUser}
                                            /></td>
                                            <td><button type="button" class="btn btn-danger" onClick={() => this.removeUser(item)}>
                                                X
                                            </button></td>
                                        </tr>
                                    )
                                })
                            }
                        </tbody>
                    </table>
                </div >
            </>
        )
    }
}

export default withRouter(Users);