import React from 'react';
import './inventories.css'
import AddInventories from './AddInventories';
import { withRouter } from 'react-router-dom';
import EditInventories from './EditInventories';

class Inventories extends React.Component {

    state = {
        listInventories: [
            { id: '1', deviceName: 'Dell Lattitude 5710', serialNumber: 'KUHF87230SKU', assignedDate: '2022-06-03', categories: '1', status: '1' },
            { id: '2', deviceName: 'HP Laser E1233', serialNumber: 'HUIF87240SKU', assignedDate: '2022-06-03', categories: '2', status: '2' },
            { id: '3', deviceName: 'Acer 34209', serialNumber: 'SSDF87230SKU', assignedDate: '2022-06-03', categories: '3', status: '3' },
            { id: '4', deviceName: 'DryTek 12344', serialNumber: 'KUHF87230SKU', assignedDate: '2022-06-03', categories: '4', status: '4' },
            { id: '5', deviceName: 'Asus 230MP60', serialNumber: '234487230SKU', assignedDate: '2022-06-03', categories: '5', status: '4' },
        ],
        listInventoriesSearch: [],
        searchingText: ''
    }

    getColor = (status) => {
        if (status === "1" || status === "Assigned") {
            return "table-success";
        }
        else if (status === "2" || status === "Unassigned") {
            return "table-info";
        }
        else if (status === "3" || status === "Broken") {
            return "table-danger";
        }
        else if (status === "4" || status === "Reparing") {
            return "table-warning";
        }
    }

    //Add new Inventory
    addNewInventory = (inventory) => {
        let currentList = this.state.listInventories;
        console.log(inventory);

        currentList.push(inventory);

        this.setState({
            listInventories: currentList
        })
    }

    //Edit Inventory
    editInventory = (inventory) => {
        let currentList = this.state.listInventories;
        console.log(inventory);

        let objIndex = currentList.findIndex(item => item.id === inventory.id);
        currentList[objIndex].deviceName = inventory.deviceName;
        currentList[objIndex].serialNumber = inventory.serialNumber;
        currentList[objIndex].assignedDate = inventory.assignedDate;
        currentList[objIndex].status = inventory.status;
        currentList[objIndex].categories = inventory.categories;

        this.setState({
            listInventories: currentList
        })
    }

    //remove Inventory
    removeInventory = (inventory) => {
        let currentList = this.state.listInventories;

        currentList = currentList.filter(item => item.id !== inventory.id);

        this.setState({
            listInventories: currentList
        })
    }



    // ||
    //     data.trim().toUpperCase().includes(item.serialNumber.trim().toUpperCase()) ||
    //     data.trim().toUpperCase().includes(item.status.trim().toUpperCase())

    handleOnChangeSearchBox = (event) => {
        this.setState({
            searchingText: event.target.value
        })
        // if (this.state.searchingText) {
        //     console.log(this.state.searchingText.length);
        //     this.setState({
        //         listInventoriesSearch: this.inventorySearch(this.state.searchingText)
        //     })
        // }
    }

    inventorySearch = () => {
        let data = this.state.searchingText;
        let listInventoriesSearch = this.state.listInventories;
        let result = [];
        if (data) {
            listInventoriesSearch.forEach(item => {
                if (item.deviceName.trim().toUpperCase().includes(data.trim().toUpperCase())) {
                    console.log(item);
                    result.push(item);
                }
            });
        }
        else {
            result = listInventoriesSearch;
        }

        return result;
    }


    render() {
        let { listInventories, searchingText, listInventoriesSearch } = this.state;

        //Transform data in table
        let listInventoriesUpdate;
        if (listInventoriesSearch.length == 0) {
            listInventoriesUpdate = listInventories;
        }
        else {
            listInventoriesUpdate = listInventoriesSearch;
        }
        listInventoriesUpdate.map((item, index) => {

            //Transform for Categories
            if (item.categories === "1") {
                item.categories = "Laptop";
            }
            else if (item.categories === "2") {
                item.categories = "Printer";
            }
            else if (item.categories === "3") {
                item.categories = "Monitor";
            }
            else if (item.categories === "4") {
                item.categories = "Switch";
            }
            else if (item.categories === "5") {
                item.categories = "Camera";
            }

            //Transform for status

            if (item.status === "1") {
                item.status = "Assigned";
            }
            else if (item.status === "2") {
                item.status = "Unassigned";
            }
            else if (item.status === "3") {
                item.status = "Broken";
            }
            else if (item.status === "4") {
                item.status = "Reparing";
            }
        })

        return (
            <>
                <div className='row searchGroup'>
                    <div className='col-10'>
                        <input type="text" className="form-control" value={this.state.searchingText} onInput={(event) => this.handleOnChangeSearchBox(event)} placeholder="Search something..." />
                    </div>
                    <div className='col-2'>
                        <AddInventories
                            addNewInventory={this.addNewInventory}
                        />
                        {/* <button type="button" id='btnAddInventory' class="btn btn-success btn-block">Success</button> */}
                    </div>
                </div>
                <div className='row tableContainer'>
                    <table className="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Device Name</th>
                                <th scope="col">Serial Number</th>
                                <th scope="col">Assigned Date</th>
                                <th scope="col">Categories</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {listInventoriesUpdate && listInventoriesUpdate.length > 0 &&
                                listInventoriesUpdate.map((item, index) => {
                                    return (
                                        <tr className={this.getColor(item.status)}>
                                            <th scope="row">{item.id}</th>
                                            <td>{item.deviceName}</td>
                                            <td>{item.serialNumber}</td>
                                            <td>{item.assignedDate}</td>
                                            <td>{item.categories}</td>
                                            <td>{item.status}</td>
                                            <td><EditInventories editedItem={item}
                                                editInventory={this.editInventory(item)}
                                            /></td>
                                            <td><button type="button" class="btn btn-danger" onClick={() => this.removeInventory(item)}>
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

export default withRouter(Inventories);

