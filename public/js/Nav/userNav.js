const PathNames = [
    {
        path: "/dashboard/user/home",
    },
    {
        path: "/dashboard/user/discovers",
    },
    {
        path: "/dashboard/user/enrolled-courses",
    },
    {
        path: "/dashboard/user/settings",
    },
    {
        path: "/dashboard/user/account",
    },
];

const _handlePath = () => {
    const Path = document.querySelectorAll("#path-holder ul li");

    PathNames.map((p, index) => {
        p.path === location.pathname
            ? (Path[index].className = "mt-2 mb-2 leading-10 active")
            : "";
    });
};

_handlePath();
