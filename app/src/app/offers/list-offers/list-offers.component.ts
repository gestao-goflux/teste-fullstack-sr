import { Component, OnInit } from "@angular/core";

import { OffersService } from "../offers.service";

@Component({
  selector: 'app-list-offers',
  templateUrl: './list-offers.component.html',
  styleUrls: ['./list-offers.component.scss']
})

export class ListOfOffersComponent implements OnInit {
  listOfOffers = [];
  userId = '';

  constructor(
    private offersService: OffersService
  ) {}

  ngOnInit(): void {
    // this.userId = loggedUser;
    this.listOffers();  
  }

  listOffers = () => {
    this.offersService
    .getOffers('3').subscribe((list) => {
      this.listOfOffers = [list];
    })
  }
}