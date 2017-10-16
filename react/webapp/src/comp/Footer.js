import React, { Component } from 'react';
import { Container, Row, Col } from 'reactstrap';
import { FaEnvelopeO } from 'react-icons/lib/fa';
import { Button, Form, FormGroup, Label, Input, FormText } from 'reactstrap';
import { Nav, NavItem, NavLink } from 'reactstrap';


class Footer extends Component {
    render() {
        return (
            <div>
            <Container>
                    <Row>
                      <Col xs="6">SUBSCRIBE TO NEWSLETTER</Col>
                      <Col xs="6">
                        <Form inline>
                            <FormGroup>
                              <Input type="email" name="email" id="email-footer-input" placeholder="Your email address" />
                                <Button color="warning" href="">
                                    <FaEnvelopeO />
                                </Button>
                            </FormGroup>
                        </Form>
                      </Col>
                    </Row>
            </Container>
            
            <hr />

                <Nav>
                  <NavItem>
                    <NavLink href="#">ABOUT US</NavLink>
                  </NavItem>
                  <NavItem>
                    <NavLink href="#">CONTACT</NavLink>
                  </NavItem>
                  <NavItem>
                    <NavLink href="#">SUPPORT</NavLink>
                  </NavItem>
                  <NavItem>
                    <NavLink href="#">TO BE DEFINED</NavLink>
                  </NavItem>
                </Nav>
                <p>© 2017 Beavver. All rights reserved.</p>
            </div>

        );
  }
}

export default Footer;