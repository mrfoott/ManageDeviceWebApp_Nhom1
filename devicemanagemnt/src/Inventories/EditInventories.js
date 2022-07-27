import React from "react";
import "./editInventories.css";
import { withRouter } from 'react-router-dom';

class EditInventory extends React.Component {

    state = {
        listCategories: [
            { id: '1', categoryName: 'Laptop' },
            { id: '2', categoryName: 'Printer' },
            { id: '3', categoryName: 'Monitor' },
            { id: '4', categoryName: 'Switch' },
            { id: '5', categoryName: 'Camera' },
        ],
        listStatus: [
            { id: '1', categoryName: 'Assigned' },
            { id: '2', categoryName: 'Unassigned' },
            { id: '3', categoryName: 'Broken' },
            { id: '4', categoryName: 'Reparing' },
        ],

        id: this.props.editedItem.id,
        deviceName: this.props.editedItem.deviceName,
        serialNumber: this.props.editedItem.serialNumber,
        assignDate: this.props.editedItem.assignedDate,
        categoryName: this.props.editedItem.categories,
        deviceStatus: this.props.editedItem.status
    }

    //handle on change value
    handleOnChangeName = (event) => {
        this.setState({
            deviceName: event.target.value
        })
    }

    handleOnChangeSerial = (event) => {
        this.setState({
            serialNumber: event.target.value
        })
    }

    handleOnChangeAssign = (event) => {
        this.setState({
            assignDate: event.target.value
        })
    }

    handleOnChangeStatus = (event) => {
        this.setState({
            deviceStatus: event.target.value
        })
    }

    handleOnChangeCategory = (event) => {
        this.setState({
            categoryName: event.target.value
        })
    }

    //handle Add new Inventories
    handleEditInventories = () => {
        let editedInventory = {
            id: this.state.id,
            deviceName: this.state.deviceName,
            serialNumber: this.state.serialNumber,
            assignedDate: this.state.assignDate,
            categories: this.state.categoryName,
            status: this.state.deviceStatus
        }
        console.log(this.state.deviceName);
        this.props.editInventory(editedInventory);

        this.setState({
            id: '',
            deviceName: '',
            serialNumber: '',
            assignedDate: '',
            categories: '',
            status: ''
        })



    }

    render() {

        let { listCategories, listStatus, deviceName, serialNumber, assignDate, categoryName, deviceStatus } = this.state;

        return (
            <>
                {/* <!-- Button trigger modal --> */}
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editInventory">
                    Edit
                </button>

                {/* <!-- Modal --> */}
                <div class="modal fade" id="editInventory" tabindex="-1" aria-labelledby="addNewDeviceLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addNewDeviceLabel" style={{ color: "black" }}>Add New Device</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div className="container-fluid">
                                    <div className="row">
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Device Name</label>
                                            <input type="text" class="form-control" value={deviceName} onChange={(event) => this.handleOnChangeName(event)} placeholder="Input Device Name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Serial Number</label>
                                            <input type="text" class="form-control" value={serialNumber} onChange={(event) => this.handleOnChangeSerial(event)} placeholder="Input Serial Number" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Assigned Date</label>
                                            <input type="text" class="form-control" value={assignDate} onChange={(event) => this.handleOnChangeAssign(event)} placeholder="Assign Date" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Category</label>
                                            <select class="form-select" aria-label="Default select example" value={categoryName} onChange={(event) => this.handleOnChangeCategory(event)}>
                                                <option selected>Open this select menu</option>
                                                {
                                                    listCategories.map((item, index) => {
                                                        return (
                                                            <option value={item.id}>{item.categoryName}</option>
                                                        )
                                                    })
                                                }
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100" style={{ color: "black", textAlign: "left" }}>Status</label>
                                            <select class="form-select" aria-label="Default select example" value={deviceStatus} onChange={(event) => this.handleOnChangeStatus(event)}>=
                                                <option selected>Open this select menu</option>
                                                {
                                                    listStatus.map((item, index) => {
                                                        return (
                                                            <option value={item.id}>{item.categoryName}</option>
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
                                <button type="button" class="btn btn-primary" onClick={() => this.handleEditInventories()}>Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </>
        )
    }

}

export default withRouter(EditInventory);