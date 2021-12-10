import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';

import { ListOfOffersComponent } from './list-offers/list-offers.component';
import { NewOfferComponent } from './new-offer/new-offer.component';
import { OfferCardComponent } from './offer-card/offer-card.component';
import { SeeOffersModalComponent } from './see-offers-modal/see-offers-modal.component';

@NgModule({
  declarations: [
    ListOfOffersComponent,
    NewOfferComponent,
    OfferCardComponent,
    SeeOffersModalComponent

  ],
  exports: [
    ListOfOffersComponent,
    NewOfferComponent,
    OfferCardComponent,
  ],
  imports: [
    CommonModule,
    HttpClientModule,
    RouterModule
  ],
  providers: [],
  bootstrap: []
})
export class OffersModule { }
