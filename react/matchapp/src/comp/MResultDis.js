import React, { Component } from 'react';
import './MCon.css';

class MResultDis extends Component {
  render() {
      var soft = [];
      var hard = [];
      var missarr = [];
      
      for(var i in this.props.resultsoft){
          var comp = (
                    <tr key={i}>
                        <td>{i}</td>
                        <td>{this.props.resultsoft[i].restimes}</td>
                        <td>{this.props.resultsoft[i].jobtimes}</td>
                    </tr>
          )
        soft.push(comp);
      };
      
      for(var i in this.props.resultshard){
          var comp = (
                    <tr key={i}>
                        <td>{i}</td>
                        <td>{this.props.resultshard[i].restimes}</td>
                        <td>{this.props.resultshard[i].jobtimes}</td>
                    </tr>
          )
        hard.push(comp);
      }
      
      for(var i=0; i<this.props.missingskill.length; i++){
          var comp = (
            <span key={i}> {this.props.missingskill[i]} - </span>
          )
          missarr.push(comp);
      }
    return (
      <div>
        <table>
            <caption>Soft Skills</caption>
            <thead>
               <tr>
                <th>Keywords</th>
                <th>Resume</th>
                <th>Job Description</th>
                </tr> 
            </thead>
            <tbody>
                {soft}
            </tbody>
        </table>
        <table>
            <caption>Hard Skills</caption>
            <thead>
               <tr>
                <th>Keywords</th>
                <th>Resume</th>
                <th>Job Description</th>
                </tr> 
            </thead>
            <tbody>
                {hard}
            </tbody>
        </table>
        
        <div>Suggestion</div>
        
        <div>
        Recommend Courses <br/>
        {missarr}
        <br/>
        </div>
      </div>
    );
  }
}

export default MResultDis;