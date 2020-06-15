import React from "react"

class ToDoItem extends React.Component {

    constructor(props) {
        super(props)

        this.handleOnClick = this.handleOnClick.bind(this)
    }

    handleOnClick(event) {
        if(event.target.checked) {
            this.props.onCheck(this.props.id)
        }
        else {
            this.props.onUncheck(this.props.id)
        }
    }

    render() {
        return (
            <div>
                <input type="checkbox" id={this.props.id} checked={this.props.checked}  onChange={this.handleOnClick}></input>
                <label htmlFor={this.props.id} className={(this.props.checked ? 'crossed' : '')}>{this.props.name}</label>
            </div>
        )
    }
}

export default ToDoItem