import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { NgModule } from '@angular/core';

import { HeaderComponent } from './base/header.component';
import { LoginComponent } from './base/login/login.component';


@NgModule({
  declarations: [
    HeaderComponent,
    LoginComponent
  ],
  exports: [
      HeaderComponent,
      LoginComponent
  ],
  imports: [
    CommonModule,
    FormsModule
  ],
  providers: [],
  bootstrap: []
})
export class SharedModule { }
