import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Header from "./comp/Header";
import SearchBox from "./comp/SearchBox";
import Footer from "./comp/Footer";


class App extends Component {
  render() {
    return (
      <div className="App">
        <Header />
        <SearchBox />
        <Footer/>
      </div>
    );
  }
}

export default App;
