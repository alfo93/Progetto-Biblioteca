SELECT N_MATRICOLA_EFFETTUA,NOME_UTENTE,COGNOME_UTENTE,N_TELEFONO
FROM UTENTI AS U,EFFETTUA AS E,LIBRO AS L,CONCESSO AS C
WHERE L.CODICE_LIBRO=C.CODICE_LIBRO_CONCESSO
AND	E.CODICE_PRESTITO_EFFETTUA=C.CODICE_PRESTITO_CONCESSO
AND E.N_MATRICOLA_EFFETTUA=U.N_MATRICOLA
AND (L.CODICE_LIBRO='' OR L.TITOLO='' OR L.ISBN='')
ORDER BY U.N_MATRICOLA ASC;