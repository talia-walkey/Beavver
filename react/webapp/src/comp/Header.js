import React from 'react';
import { Collapse, Navbar, NavbarToggler, NavbarBrand, Nav, NavItem, NavLink } from 'reactstrap';
import { Button, Media, Form, FormGroup, Label, Input, FormText, Fade } from 'reactstrap';
import { ButtonDropdown, DropdownToggle, DropdownMenu, DropdownItem } from 'reactstrap';
import {FaSearch} from 'react-icons/lib/fa';

export default class Example extends React.Component {
  constructor(props) {
    super(props);

    this.BtnDropdownToggle = this.BtnDropdownToggle.bind(this);
    this.state = {
      dropdownOpen: false
    };  
 
    this.MenuToggle = this.MenuToggle.bind(this);
    this.state = {
        isOpen: false   
    };
  }
    
  BtnDropdownToggle() {
    this.setState({
      dropdownOpen: !this.state.dropdownOpen
    });
  }    
    
  MenuToggle() {
    this.setState({
        isOpen: !this.state.isOpen
    });
  }
    
  render() {
    return (
      <div>
        <Navbar color="faded" light expand="md">
          <NavbarBrand href="/">
                <Media>
                    <Media object src="../img/logo-text.png" alt="Beavver" />        
                </Media>
            </NavbarBrand>
        
        
          <NavbarToggler onClick={this.MenuToggle} />
          <Collapse isOpen={this.state.isOpen} navbar>
            
            {/* MENU */}
            <Nav className="ml-auto" navbar>
              <NavItem>
                <NavLink href="">FEATURES</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="">PRICING</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="">SUPPORT</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="">HOW IT WORKS</NavLink>
              </NavItem>        
            </Nav>
        
            <Nav className="ml-auto" navbar>
            {/* SEARCH */}
                <FaSearch />
                
            {/* LOGIN */}

              <NavItem>
                  <ButtonDropdown isOpen={this.state.dropdownOpen} toggle={this.BtnDropdownToggle}>
                    <DropdownToggle caret color="warning">
                      LOGIN
                    </DropdownToggle>
        
                    {/* BEFORE LOGIN */}
                    <DropdownMenu>
                        <DropdownItem>
                            <Form>
                                <FormGroup>
                                    <Input type="email" name="email" id="email-input" placeholder="Your Email" />
                                </FormGroup>
                                <FormGroup>
                                    <Input type="password" name="password" id="password-input" placeholder="Password" />
                                </FormGroup> 
                                <FormGroup check>
                                    <Label check>
                                        <Input type="checkbox" />
                                        Remember Me
                                    </Label>
                                </FormGroup>
                                <Button color="warning" href="">Sign In</Button>
                            </Form>
                        </DropdownItem>
                    </DropdownMenu>
        
                    {/* AFTER LOGIN */}
                    {/*
                    <DropdownMenu>
                      <DropdownItem href="/components/">My Career</DropdownItem>
                      <DropdownItem href="/components/">My Profile</DropdownItem>
                      <DropdownItem href="/components/">My Plan</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem href="/components/">Sign Out</DropdownItem>
                    </DropdownMenu>
                    */}
                  </ButtonDropdown>
              </NavItem>
              <NavItem>
                <Button href="" color="warning">Sign Up</Button>
              </NavItem>
            </Nav>
        
          </Collapse>
        </Navbar>
      </div>
    );
  }
}