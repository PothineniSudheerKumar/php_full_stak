function MoviesChild(){
    const moviesList = [{movieName : 'Titanic',year : 1990},{movieName : 'EvilDead',year : 2000}];
    return(
        <div>
            <h3>This is child movies component</h3>
            <p>Array map</p>
            {moviesList.map((movieLists,i) => <div key = {i}>{movieLists.movieName} - {movieLists.year}</div>)}
        </div>
    )
}
export default MoviesChild;