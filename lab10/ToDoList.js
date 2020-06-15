import React from "react"
import ToDoItem from "./ToDoItem"

class ToDoList extends React.Component {

    constructor(props) {
        super(props)
    }
    render() {
        let todos = this.props.todos.reduce((group, todo, index) => {
            if(!this.props.filter || !todo.checked) {
                group.push(
                    <ToDoItem key={index} id={index} name={todo.name} checked={todo.checked} onCheck={this.props.onCheck} onUncheck={this.props.onUncheck}/>
                )
            }
            return group}, [])
        return todos
    }
}

export default ToDoList