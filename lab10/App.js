import React from "react"
import Filter from "./Filter"
import ToDoList from "./ToDoList"
import NewToDoItem from "./NewToDoItem"

class App extends React.Component {

    constructor(props) {
        super(props)

        this.state= {
            todos: [],
            filter: false
    }

    this.handleOnFilterCheck = this.handleOnFilterCheck.bind(this)
    this.handleOnFilterUncheck = this.handleOnFilterUncheck.bind(this)
    this.handleOnCheck = this.handleOnCheck.bind(this)
    this.handleOnUncheck = this.handleOnUncheck.bind(this)
    this.handleOnSubmit = this.handleOnSubmit.bind(this)
    } 

    handleOnFilterCheck() {
        this.setState((prevState) => {prevState.filter = true
        return prevState
        })
    }

    handleOnFilterUncheck() {
        this.setState((prevState) => {prevState.filter = false
        return prevState
        })
    }

    handleOnCheck(index) {
        this.setState((prevState) => {prevState.todos[index].checked = true
        return prevState
        })
    }

    handleOnUncheck(index) {
        this.setState((prevState) => {prevState.todos[index].checked = false
        return prevState
        })
    }

    handleOnSubmit(value) {
        this.setState({todos: this.state.todos.concat([{name: value, checked: false }])})
    }

    render() { 
        return (
        <div id="entireBox">
            <h2>Welcome to my To-Do-List</h2>
            <div id="listBox">
                <Filter onCheck={this.handleOnFilterCheck} onUncheck={this.handleOnFilterUncheck}/>
                <ToDoList todos={this.state.todos} onCheck={this.handleOnCheck} onUncheck={this.handleOnUncheck} filter={this.state.filter}/>
                <NewToDoItem onSubmit={this.handleOnSubmit}/>
            </div>
        </div>
        )
    }
}

export default App