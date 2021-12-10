import { catchError, retry } from 'rxjs/operators';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment';
import { Injectable } from '@angular/core';
import { Observable, throwError } from 'rxjs';

import { Orders } from './orders.interface';


@Injectable({
  providedIn: 'root',
})
export class OrdersService {

  constructor(
    private httpClient: HttpClient
  ) { }

  API_URL = environment['API_URL'];

  httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/json' })
  };


  getOrders = (): Observable<any> => {
    return this.httpClient.get(this.API_URL + 'orders')
      .pipe(
        retry(2),
        catchError(this.handleError)
      );
  }

  newOffer = (offer: Orders): Observable<any> => {
    return this.httpClient.post(this.API_URL + 'orders', JSON.stringify(offer), this.httpOptions)
      .pipe(
        retry(2),
        catchError(this.handleError)
      );
  }

  updateOffer = (offer: Orders): Observable<any> => {
    return this.httpClient.put(this.API_URL + 'orders', JSON.stringify(offer), this.httpOptions)
      .pipe(
        retry(2),
        catchError(this.handleError)
      );
  }

  handleError(error: HttpErrorResponse) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      // Erro ocorreu no lado do client
      errorMessage = error.error.message;
    } else {
      // Erro ocorreu no lado do servidor
      errorMessage = `Código do erro: ${error.status}, ` + `menssagem: ${error.message}`;
    }
    return throwError(errorMessage);
  }

}