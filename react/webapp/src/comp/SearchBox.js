import React, { Component } from 'react';
import { Fade } from 'reactstrap';
import { FaSearch } from 'react-icons/lib/fa';
import { Button, Form, FormGroup, Label, Input } from 'reactstrap';

class SearchBox extends Component {
    render() {
        return (
            <div className="search-box">
                <Form inline>
                    <FormGroup>
                      <Input type="text" name="search" id="search-input" placeholder="Search" />
                    </FormGroup>
                    <Button color="warning" href="">
                        <FaSearch />
                    </Button>
              </Form>
            </div>    
        );
  }
}

export default SearchBox;