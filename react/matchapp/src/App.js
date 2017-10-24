import React, { Component } from 'react';
import './App.css';
import MControl from './comp/MControl';
import MResultDis from './comp/MResultDis';

class App extends Component {
    constructor(props){
        super(props);
        
        this.state ={
            matching:{},
            missingword:[],
            
        }
        
        this.pushMatching = this.pushMatching.bind(this);
        
    }
    pushMatching(data){
        var temp = this.state.matching;
        temp.push(data);
        
        this.setState({
            matching:temp
        });
        
        console.log(temp);
    }

    render() {    
        return (
          <div className="App">
            
            <MControl 
            pushMatching={this.pushMatching}
            />
          </div>
        );
    }
}

export default App;
