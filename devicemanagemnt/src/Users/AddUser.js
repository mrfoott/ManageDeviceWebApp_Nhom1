import React from "react";
import "./addUser.css";
import { withRouter } from 'react-router-dom';

class AddUser extends React.Component {

    state = {
        listDepartments: [
            { id: '1', department: 'IT' },
            { id: '2', department: 'HR' },
            { id: '3', department: 'Pharmacity' },
            { id: '4', department: 'New Project' },
            { id: '5', department: 'Admin' },
        ],
        listRoles: [
            { id: '1', role: 'IT Manager' },
            { id: '2', role: 'HR Executive' },
            { id: '3', role: 'Senior SE' },
            { id: '4', role: 'SE' },
            { id: '5', role: 'Admin Executive' },
        ],
        listStatus: [
            { id: '1', status: 'Working' },
            { id: '2', status: 'Teminated' },
            { id: '3', status: 'Temp Teminated' },
            { id: '4', status: 'Pending' },
        ],

        userName: '',
        assignedDevice: '',
        userDepartment: '',
        userRole: '',
        userState: ''
    }

    //handle on change value
    handleOnChangeName = (event) => {
        this.setState({
            userName: event.target.value
        })
    }

    handleOnChangeAssignDevice = (event) => {
        this.setState({
            assignedDevice: event.target.value
        })
    }

    handleOnChangeDepartment = (event) => {
        this.setState({
            userDepartment: event.target.value
        })
    }

    handleOnChangeStatus = (event) => {
        this.setState({
            userState: event.target.value
        })
    }

    handleOnChangeRole = (event) => {
        this.setState({
            userRole: event.target.value
        })
    }

    //handle Add new Inventories
    handleAddNewUser = () => {
        let newUser = {
            id: Math.floor(Math.random() * 100),
            name: this.state.userName,
            assignedDevice: this.state.assignedDevice,
            department: this.state.userDepartment,
            role: this.state.userRole,
            status: this.state.userState
        }

        this.props.addNewUser(newUser);
        this.setState({
            id: '',
            userName: '',
            assignedDevice: '',
            userDepartment: '',
            userRole: '',
            userState: ''
        })
    }

    render() {

        let { listDepartments, listStatus, listRoles, userName, assignedDevice, userDepartment, userRole, userState } = this.state;


        return (
            <>
                {/* <!-- Button trigger modal --> */}
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUser">
                    Add New User
                </button>

                {/* <!-- Modal --> */}
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addNewDeviceLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addNewDeviceLabel" style={{ color: "black" }}>Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div className="container-fluid">
                                    <div className="row">
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>User Name</label>
                                            <input type="text" class="form-control" value={userName} onChange={(event) => this.handleOnChangeName(event)} placeholder="Input User Name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Assigned Device</label>
                                            <input type="text" class="form-control" value={assignedDevice} onChange={(event) => this.handleOnChangeAssignDevice(event)} placeholder="Input Assigned Device" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Department</label>
                                            <select class="form-select" aria-label="Default select example" value={userDepartment} onChange={(event) => this.handleOnChangeDepartment(event)}>
                                                <option selected>Open this select menu</option>
                                                {
                                                    listDepartments.map((item, index) => {
                                                        return (
                                                            <option value={item.id}>{item.department}</option>
                                                        )
                                                    })
                                                }
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Roles</label>
                                            <select class="form-select" aria-label="Default select example" value={userRole} onChange={(event) => this.handleOnChangeRole(event)}>
                                                <option selected>Open this select menu</option>
                                                {
                                                    listRoles.map((item, index) => {
                                                        return (
                                                            <option value={item.id}>{item.role}</option>
                                                        )
                                                    })
                                                }
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Status</label>
                                            <select class="form-select" aria-label="Default select example" value={userState} onChange={(event) => this.handleOnChangeStatus(event)}>
                                                <option selected>Open this select menu</option>
                                                {
                                                    listStatus.map((item, index) => {
                                                        return (
                                                            <option value={item.id}>{item.status}</option>
                                                        )
                                                    })
                                                }
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onClick={() => this.handleAddNewUser()}>Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </>
        )
    }

}

export default withRouter(AddUser);