import React from "react"

class NewToDoItem extends React.Component {

    constructor(props) {
        super(props)
        this.state = {value: ''}
    
        this.handleOnChange = this.handleOnChange.bind(this)
        this.handleOnSubmit = this.handleOnSubmit.bind(this)
      }

    handleOnChange(event) {
        this.setState({value: event.target.value})
    }

    handleOnSubmit(event) {
        this.props.onSubmit(this.state.value)
    }

    render() {
        return (
            <div>
                <input type="text" id="newToDoItem" value={this.state.value} onChange={this.handleOnChange}></input>
                <input type="button" value="Add" onClick={this.handleOnSubmit}></input>
            </div>
        )
    }
}

export default NewToDoItem