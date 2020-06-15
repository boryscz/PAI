import React from "react"

class Filter extends React.Component {

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
                <input type="checkbox" id="filter" onClick={this.handleOnClick}></input>
                <label htmlFor="filter"> hide completed</label>
            </div>
        )
    }

}

export default Filter